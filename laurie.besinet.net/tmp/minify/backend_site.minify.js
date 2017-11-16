/*
 Inspired by the lightbox plugin adapted to jquery by Leandro Vieira Pinho (http://leandrovieira.com)
 
 @author  : Nicolas Turlais : nicolas-at-insipi.de
 @version : V0.3.1 - June 2012
 @license : Licensed under CCAttribution-ShareAlike
 @website : http://chocolat.insipi.de
 
*/
(function($) {
	images = [];
	var calls = 0;
	$.fn.Chocolat = function(settings) {
		settings = $.extend({
			container             : $('body'),
			displayAsALink        : false,
			linkImages            : true,
			linksContainer        : 'Choco_links_container',				
			overlayOpacity        : 0.9,
			overlayColor          : '#fff',
			fadeInOverlayduration : 500,
			fadeInImageduration   : 500,
			fadeOutImageduration  : 500,
			vache                 : true,					
			separator1            : ' | ',						
			separator2            : '/',						
			leftImg               : 'images/left.gif',	
			rightImg              : 'images/right.gif',	
			closeImg              : 'images/close.gif',		
			loadingImg            : 'images/loading.gif',		
			currentImage          : 0,						
			setIndex              : 0,
			setTitle              : '',
			lastImage             : 0
		},settings);
		
		calls++;
		settings.setIndex = calls;
		images[settings.setIndex] = [];
		
		//images:
		this.each(function(index){
			if(index == 0 && settings.linkImages && settings.setTitle == ''){
				settings.setTitle = isSet($(this).attr('rel'), ' ');
			}
			$(this).each(function() {
				images[settings.setIndex]['displayAsALink'] = settings.displayAsALink;
				images[settings.setIndex][index]            = [];
				images[settings.setIndex][index]['adress']  = isSet($(this).attr('href'), ' ');
				images[settings.setIndex][index]['caption'] = isSet($(this).attr('title'), ' ');
				if(!settings.displayAsALink){
					$(this).unbind('click').bind('click', {
						id  : settings.setIndex,
						nom : settings.setTitle,
						i   : index
					}, _initialise);
				}
			})
		});
		
		//setIndex:
		for(var i = 0; i < images[settings.setIndex].length; i++)
		{
			if(images[settings.setIndex]['displayAsALink']){
				if($('#'+settings.linksContainer).size() == 0){
					this.filter(":first").before('<ul id="'+settings.linksContainer+'"></ul>');
				}
				$('#'+settings.linksContainer).append('<li><a href="#" id="Choco_numsetIndex_'+settings.setIndex+'" class="Choco_link">'+settings.setTitle+'</a></li>');
				e = this.parent();
				$(this).remove();
				if($.trim(e.html()) == ""){//If parent empty : remove it
					e.remove();
				}
				return $('#Choco_numsetIndex_'+settings.setIndex).unbind('click').bind('click', {id: settings.setIndex, nom : settings.setTitle, i : settings.currentImage}, _initialise);
			}
		}
		
		function _initialise(event) {
			
			settings.currentImage = event.data.i;
			settings.setIndex     = event.data.id;
			settings.setTitle     = event.data.nom;
			settings.lastImage    = images[settings.setIndex].length - 1;
			showChocolat();
			return false;
		}
		function _interface(){
			//html
			clear();
			settings.container.append('<div id="Choco_overlay"></div><div id="Choco_content"><div id="Choco_close"></div><div id="Choco_loading"></div><div id="Choco_container_photo"><img id="Choco_bigImage" src="" /></div><div id="Choco_container_description"><span id="Choco_container_title"></span><span id="Choco_container_via"></span></div><div id="Choco_left_arrow" class="Choco_arrows"></div><div id="Choco_right_arrow" class="Choco_arrows"></div></div>');	
			$('#Choco_left_arrow').css('background-image', 'url('+settings.leftImg+')');  
			$('#Choco_right_arrow').css('background-image', 'url('+settings.rightImg+')');  
			$('#Choco_close').css('background-image', 'url('+settings.closeImg+')'); 
			$('#Choco_loading').css('background-image', 'url('+settings.loadingImg+')'); 
			if(settings.container.get(0).nodeName.toLowerCase() !== 'body'){
				settings.container.css({'position':'relative','overflow':'hidden','line-height':'normal'});//yes, yes
				$('#Choco_content').css('position','relative');
				$('#Choco_overlay').css('position', 'absolute');
			}
			//events
			$(document).unbind('keydown').bind('keydown', function(e){
				switch(e.keyCode){
					case 37:
						changePageChocolat(-1);
						break;
					case 39:
						changePageChocolat(1);
						break;
					case 27:
						close();
						break;
				};
			});
			if(settings.vache){
				$('#Choco_overlay').click(function(){
					close();
					return false;
				});
			}
			$('#Choco_left_arrow').unbind().bind('click', function(){
				changePageChocolat(-1);
				return false;
			});
			$('#Choco_right_arrow').unbind().bind('click', function(){
				changePageChocolat(1);
				return false;
			});
			$('#Choco_close').unbind().bind('click', function(){
				close();
				return false;
			});
			$(window).resize(function() {
				load(settings.currentImage,true);
			});
	
		}
		function showChocolat(){	
			_interface();
			load(settings.currentImage, false);
			$('#Choco_overlay')
				.css({
					'background-color' : settings.overlayColor,
					'opacity'          : settings.overlayOpacity
				})
				.fadeIn(settings.fadeInOverlayduration);
			$('#Choco_content').fadeIn(settings.fadeInImageduration,function(){});
			
		}
		function load(image,resize){
			settings.currentImage = image;
			$('#Choco_loading').fadeIn(settings.fadeInImageduration);
			var imgPreloader = new Image();
			imgPreloader.onload = function(){
				$('#Choco_bigImage').attr('src',images[settings.setIndex][settings.currentImage]['adress']);
				var ajustees = iWantThePerfectImageSize(imgPreloader.height,imgPreloader.width);
				ChoColat(ajustees['hauteur'],ajustees['largeur'],resize);
				$('#Choco_loading').stop().fadeOut(settings.fadeOutImageduration);
			};
			imgPreloader.src = images[settings.setIndex][settings.currentImage]['adress'];
			preload();
			upadteDescription();
		}
		function changePageChocolat(signe){
			if(!settings.linkImages || (settings.currentImage == 0 && signe == -1) || (settings.currentImage == settings.lastImage && signe == 1))
			{
				return false;
			}
			else{
				//$('#Choco_container_description').fadeTo(settings.fadeOutImageduration,0); making a weird bug with firefox 17
				$('#Choco_container_description').css('visibility','hidden');
				$('#Choco_bigImage').fadeTo(settings.fadeOutImageduration, 0, function(){
					load(settings.currentImage + parseInt(signe), false);
				});
			}
		}
		function ChoColat(hauteur_image,largeur_image,resize){

			if(resize){
				$('#Choco_container_photo, #Choco_content, #Choco_bigImage').stop(true,false).css({'overflow':'visible'});
				$('#Choco_bigImage').animate({
					'height' : hauteur_image+'px',
					'width'  : largeur_image+'px'
				},settings.fadeInImageduration);
			}
			$('#Choco_container_photo').animate({
					'height' : hauteur_image,
					'width'  : largeur_image
			},settings.fadeInImageduration);
			$('#Choco_content').animate({
				'height'     : hauteur_image,
				'width'      : largeur_image,
				'marginLeft' : -largeur_image/2,
				'marginTop'  : -(hauteur_image)/2
			},settings.fadeInImageduration, 'swing', function(){
				$('#Choco_bigImage').fadeTo(settings.fadeInImageduration, 1).height(hauteur_image).width(largeur_image);
				if(!resize)
				{
					arrowsManaging();
					//$('#Choco_container_description').fadeTo(settings.fadeInImageduration,1); making a weird bug with firefox 17
					$('#Choco_container_description').css('visibility','visible');
					$('#Choco_close').fadeIn(settings.fadeInImageduration);
				}
			}).
			css('overflow', 'visible');
		}
		function arrowsManaging(){
			if(settings.linkImages){
				var what = ['Choco_right_arrow','Choco_left_arrow'];
				for(var i=0; i < what.length; i++){
					hide = false;
					if(what[i] == 'Choco_right_arrow' && settings.currentImage == settings.lastImage){
						hide = true;
						$('#'+what[i]).fadeOut(300);
					}
					else if(what[i] == 'Choco_left_arrow' && settings.currentImage == 0){
						hide = true;
						$('#'+what[i]).fadeOut(300);
					}
					if(!hide){
						$('#'+what[i]).fadeIn(settings.fadeOutImageduration);
					}
				}
			}
		}
		function preload(){
			if(settings.currentImage !== settings.lastImage){
				i = new Image;
				z = settings.currentImage + 1;
				i.src = images[settings.setIndex][z]['adress'];
			}
		}
		function upadteDescription(){
			var current = settings.currentImage + 1;
			var last = settings.lastImage + 1;
			$('#Choco_container_title').html(images[settings.setIndex][settings.currentImage]['caption']);
			$('#Choco_container_via').html(settings.setTitle+settings.separator1+current +settings.separator2+last);
		}
		function isSet(variable,defaultValue){
			// return variable === undefined ? defaultValue : variable; ?
			if (variable === undefined) {
				return defaultValue;
			}
			else{
				return variable;
			}
		}
		function iWantThePerfectImageSize(himg,limg){
			//28% = 14% + 14% margin
			var lblock             = limg + (limg*28/100);
			var heightDescAndClose = $('#Choco_container_description').height()+$('#Choco_close').height();
			var hblock             = himg + heightDescAndClose;
			var k                  = limg/himg;
			var kk                 = himg/limg;
			if(settings.container.get(0).nodeName.toLowerCase() == 'body'){
				windowHeight = $(window).height();
				windowWidth  = $(window).width();
			}
			else{
				windowHeight = settings.container.height();
				windowWidth  = settings.container.width();
			}
			notFitting = true;
				while (notFitting){
				var lblock = limg + (limg*28/100);
				var hblock = himg + heightDescAndClose;
					if(lblock > windowWidth){
						limg = windowWidth*100/128;
						
						himg = kk * limg;
					}else if(hblock > windowHeight){
						himg = (windowHeight - heightDescAndClose);
						limg = k * himg;
					}else{
						notFitting = false;
					};
				};
			return {
				largeur:limg,
				hauteur:himg
			};

		}
		function clear(){
			$('#Choco_overlay').remove();
			$('#Choco_content').remove();
		}
		function close(){
			$('#Choco_overlay').fadeOut(900, function(){$('#Choco_overlay').remove()});
			$('#Choco_content').fadeOut(500, function(){$('#Choco_content').remove()});
			settings.currentImage = 0;
		}
	
};
})(jQuery);

/* ===========================================================
 * Bootstrap: fileinput.js v3.0.0-p7
 * http://jasny.github.com/bootstrap/javascript.html#fileinput
 * ===========================================================
 * Copyright 2012 Jasny BV, Netherlands.
 *
 * Licensed under the Apache License, Version 2.0 (the "License")
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ========================================================== */

+function ($) { "use strict";

  var isIE = window.navigator.appName == 'Microsoft Internet Explorer'

  // FILEUPLOAD PUBLIC CLASS DEFINITION
  // =================================

  var Fileupload = function (element, options) {
    this.$element = $(element)
      
    this.$input = this.$element.find(':file')
    if (this.$input.length === 0) return

    this.name = this.$input.attr('name') || options.name

    this.$hidden = this.$element.find('input[type=hidden][name="'+this.name+'"]')
    if (this.$hidden.length === 0) {
      this.$hidden = $('<input type="hidden" />')
      this.$element.prepend(this.$hidden)
    }

    this.$preview = this.$element.find('.fileinput-preview')
    var height = this.$preview.css('height')
    if (this.$preview.css('display') != 'inline' && height != '0px' && height != 'none') this.$preview.css('line-height', height)

    this.original = {
      exists: this.$element.hasClass('fileinput-exists'),
      preview: this.$preview.html(),
      hiddenVal: this.$hidden.val()
    }
    
    this.listen()
  }
  
  Fileupload.prototype.listen = function() {
    this.$input.on('change.bs.fileinput', $.proxy(this.change, this))
    $(this.$input[0].form).on('reset.bs.fileinput', $.proxy(this.reset, this))
    
    this.$element.find('[data-trigger="fileinput"]').on('click.bs.fileinput', $.proxy(this.trigger, this))
    this.$element.find('[data-dismiss="fileinput"]').on('click.bs.fileinput', $.proxy(this.clear, this))
  },

  Fileupload.prototype.change = function(e) {
    if (e.target.files === undefined) e.target.files = e.target && e.target.value ? [ {name: e.target.value.replace(/^.+\\/, '')} ] : []
    if (e.target.files.length === 0) return

    this.$hidden.val('')
    this.$hidden.attr('name', '')
    this.$input.attr('name', this.name)

    var file = e.target.files[0]

    if (this.$preview.length > 0 && (typeof file.type !== "undefined" ? file.type.match('image.*') : file.name.match(/\.(gif|png|jpe?g)$/i)) && typeof FileReader !== "undefined") {
      var reader = new FileReader()
      var preview = this.$preview
      var element = this.$element

      reader.onload = function(re) {
        var $img = $('<img>').attr('src', re.target.result)
        e.target.files[0].result = re.target.result
        
        element.find('.fileinput-filename').text(file.name)
        
        // if parent has max-height, using `(max-)height: 100%` on child doesn't take padding and border into account
        if (preview.css('max-height') != 'none') $img.css('max-height', parseInt(preview.css('max-height'), 10) - parseInt(preview.css('padding-top'), 10) - parseInt(preview.css('padding-bottom'), 10)  - parseInt(preview.css('border-top'), 10) - parseInt(preview.css('border-bottom'), 10))
        
        preview.html($img)
        element.addClass('fileinput-exists').removeClass('fileinput-new')

        element.trigger('change.bs.fileinput', e.target.files)
      }

      reader.readAsDataURL(file)
    } else {
      this.$element.find('.fileinput-filename').text(file.name)
      this.$preview.text(file.name)
      
      this.$element.addClass('fileinput-exists').removeClass('fileinput-new')
      
      this.$element.trigger('change.bs.fileinput')
    }
  },

  Fileupload.prototype.clear = function(e) {
    if (e) e.preventDefault()
    
    this.$hidden.val('')
    this.$hidden.attr('name', this.name)
    this.$input.attr('name', '')

    //ie8+ doesn't support changing the value of input with type=file so clone instead
    if (isIE) { 
      var inputClone = this.$input.clone(true);
      this.$input.after(inputClone);
      this.$input.remove();
      this.$input = inputClone;
    } else {
      this.$input.val('')
    }

    this.$preview.html('')
    this.$element.find('.fileinput-filename').text('')
    this.$element.addClass('fileinput-new').removeClass('fileinput-exists')
    
    if (e !== false) {
      this.$input.trigger('change')
      this.$element.trigger('clear.bs.fileinput')
    }
  },

  Fileupload.prototype.reset = function() {
    this.clear(false)

    this.$hidden.val(this.original.hiddenVal)
    this.$preview.html(this.original.preview)
    this.$element.find('.fileinput-filename').text('')

    if (this.original.exists) this.$element.addClass('fileinput-exists').removeClass('fileinput-new')
     else this.$element.addClass('fileinput-new').removeClass('fileinput-exists')
    
    this.$element.trigger('reset.bs.fileinput')
  },

  Fileupload.prototype.trigger = function(e) {
    this.$input.trigger('click')
    e.preventDefault()
  }

  
  // FILEUPLOAD PLUGIN DEFINITION
  // ===========================

  $.fn.fileinput = function (options) {
    return this.each(function () {
      var $this = $(this)
      , data = $this.data('fileinput')
      if (!data) $this.data('fileinput', (data = new Fileupload(this, options)))
      if (typeof options == 'string') data[options]()
    })
  }

  $.fn.fileinput.Constructor = Fileupload


  // FILEUPLOAD DATA-API
  // ==================

  $(document).on('click.fileinput.data-api', '[data-provides="fileinput"]', function (e) {
    var $this = $(this)
    if ($this.data('fileinput')) return
    $this.fileinput($this.data())
      
    var $target = $(e.target).closest('[data-dismiss="fileinput"],[data-trigger="fileinput"]');
    if ($target.length > 0) {
      e.preventDefault()
      $target.trigger('click.bs.fileinput')
    }
  })

}(window.jQuery);
/**
 * Monstra JS module
 *
 * This source file is part of the Monstra Engine. More information,
 * documentation and tutorials can be found at http://monstra.org
 *
 * @package     Monstra
 *
 * @author      Romanenko Sergey / Awilum <awilum@msn.com>
 * @copyright   2012-2014 Romanenko Sergey / Awilum <awilum@msn.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/* Confirm delete */
function confirmDelete(msg){var data=confirm(msg+" ?"); return data;}

/* Messanger */
Messenger.options = {
    extraClasses: 'messenger-fixed messenger-on-bottom messenger-on-right',
    theme: 'flat'
}
if (typeof $.monstra == 'undefined') $.monstra = {};

$.monstra.blocks = {

    init: function() { },

    showEmbedCodes: function(name) {
        $('#shortcode').html('{block get="'+name+'"}');
        $('#phpcode').html('&lt;?php echo Block::get("'+name+'"); ?&gt;');
        $('#embedCodes').modal();
    }

};


$(document).ready(function(){
    $.monstra.blocks.init();
});
if (typeof $.monstra == 'undefined') $.monstra = {};

$.monstra.snippets = {

    init: function() { },

    showEmbedCodes: function(name) {
        $('#shortcode').html('{snippet get="'+name+'"}');
        $('#phpcode').html('&lt;?php echo Snippet::get("'+name+'"); ?&gt;');
        $('#embedCodes').modal();
    }

};


$(document).ready(function(){
    $.monstra.snippets.init();
});
if (typeof $.monstra == 'undefined') $.monstra = {};

$.monstra.pages = {

    init: function() { 
        this.pagesExpandProcess();
    },

    pageExpand: function(slug, expand, token) {
        $.ajax({
            type:"post",        
            data:"page_slug="+slug+"&page_expand="+expand+"&token="+token,
            url: $('form input[name="url"]').val()
        });
    },

    pagesExpandProcess: function() {
        $(".parent").click(function() {
            if ($(this).html() == "-") {
                $('[rel="children_' + $(this).attr('rel')+'"]').hide();                                
                $(this).html("+");
                $.monstra.pages.pageExpand($(this).attr("rel"), "1", $(this).attr("token"));
            } else {
                $('[rel="children_' + $(this).attr('rel')+'"]').show();
                $(this).html("-");
                $.monstra.pages.pageExpand($(this).attr("rel"), "0", $(this).attr("token"));
            }
        });
    }

};


$(document).ready(function(){
    $.monstra.pages.init();
});
if (typeof $.monstra == 'undefined') $.monstra = {};

$.monstra.menu = {

    init: function() { },

    selectPage: function (slug, title) {
        $('input[name=menu_item_link]').val(slug);
        $('input[name=menu_item_name]').val(title);
        $('#selectPageModal').modal('hide');
    },

    selectCategory: function (name) {
        $('input[name=menu_item_category]').val(name);
        $('#selectCategoryModal').modal('hide');
    }

};


$(document).ready(function(){
    $.monstra.menu.init();
});
if (typeof $.monstra == 'undefined') $.monstra = {};

$.monstra.users = {

    init: function() {
        this.usersFrontendRegistration();
    },

    usersFrontendRegistration: function() {
		$('#users_frontend_registration').on('ifChanged', function(event){
			$("form[name=users_frontend]").submit();
		});
    }

};


$(document).ready(function(){
    $.monstra.users.init();
});
if (typeof $.monstra == 'undefined') $.monstra = {};

$.monstra.filesmanager = {

	init: function(){
		$('#filesDirsList').on('click', '.js-rename-dir', function(e){
			$.monstra.filesmanager.showRenameDialog(
				'dir',
				$(e.currentTarget).attr('data-dirname'),
				$(e.currentTarget).attr('data-path')
			);
		});
		$('#filesDirsList').on('click', '.js-rename-file', function(e){
			$.monstra.filesmanager.showRenameDialog(
				'file',
				$(e.currentTarget).attr('data-filename'),
				$(e.currentTarget).attr('data-path')
			);
		});
        $('#filesDirsList').on('click', '.js-file-info', function(e, el){
            $.monstra.filesmanager.showInfoDialog(e.currentTarget);
        });
	},

	showRenameDialog: function(type, renameFrom, path){
		var dialog = $('#renameDialog');
		dialog.find('input[name="rename_type"]').val(type);
		dialog.find('input[name="rename_from"]').val(renameFrom);
		dialog.find('input[name="path"]').val(path);
		dialog.find('#renameToHolder').text(renameFrom);
		dialog.find('[id$="RenameType"]').hide();
		dialog.find('#'+ type +'RenameType').show();
		dialog.modal('show');
	},

    showInfoDialog: function(btnEl){
        var dialog = $('#fileInfoDialog');
        dialog.find('.js-dimension-blck').hide();
        dialog.find('.js-filename').html($(btnEl).attr('data-filename'));
        dialog.find('.js-filetype').html($(btnEl).attr('data-filetype'));
        dialog.find('.js-filesize').html($(btnEl).attr('data-filesize'));
        dialog.find('.js-link').html($(btnEl).attr('data-link'));
        var dimension = $(btnEl).attr('data-dimension').trim();
        if (dimension) {
            dialog.find('.js-dimension').html(dimension);
            dialog.find('.js-dimension-blck').show();
        }
        dialog.modal('show');
    }
};

$(document).ready(function(){
	$.monstra.filesmanager.init();
});
if (typeof $.monstra == 'undefined') $.monstra = {};

$.monstra.fileuploader = {
    
    conf: {
        uploadUrl: '',
        csrf: '',
		errorMsg: '',
        uploaderId: ''
    },

    _uploaderObj: null,

    init: function(conf){
        if (!conf.uploaderId) {
            throw 'uploaderId not specified';
        }
        $.extend(this.conf, conf);
        this._uploaderObj = $('#'+ this.conf.uploaderId);
        var area = this._uploaderObj.find('.upload-area');
        area.off('dragenter.fuploader').on('dragenter.fuploader', function(e){
            e.stopPropagation();
            e.preventDefault();
            $(this).addClass('upload-area-dragenter');
        });
        area.off('dragover.fuploader').on('dragover.fuploader', function(e){
            e.stopPropagation();
            e.preventDefault();
        });
        area.off('drop.fuploader').on('drop.fuploader', function(e){
            $(this).removeClass('upload-area-dragenter').removeClass('upload-area-dragover').addClass('upload-area-drop');
            e.preventDefault();
            var files = e.originalEvent.dataTransfer.files;
            $.monstra.fileuploader.uploadFileHandle(files, area);
        });
        $(document).off('dragover.fuploader').on('dragover.fuploader', function(e){
            e.stopPropagation();
            e.preventDefault();
            area.removeClass('upload-area-dragenter').removeClass('upload-area-drop').addClass('upload-area-dragover');
        });
        $(document).off('dragenter.fuploader').on('dragenter.fuploader', function(e){
            e.stopPropagation();
            e.preventDefault();
        });
        $(document).off('drop.fuploader').on('drop.fuploader', function(e){
            e.stopPropagation();
            e.preventDefault();
        });
    },
    
    uploadFileHandle: function(files, area){
        for (var i = 0; i < files.length; i++){
            var fd = new FormData();
            fd.append('file', files[i]);
            fd.append('upload_file', 'upload_file');
			fd.append('dragndrop', '1');
            fd.append('csrf', $.monstra.fileuploader.conf.csrf);
            //this.setFileNameSize(files[i].name, files[i].size);
            
            this.uploadFile(fd, status);
        }
    },
    
    uploadFile: function(formData, status){
        var jqXHR = $.ajax({
            url: $.monstra.fileuploader.conf.uploadUrl,
            type: 'POST',
            contentType: false,
            processData: false,
            cache: false,
            data: formData,
            xhr: function() {
                var xhrobj = $.ajaxSettings.xhr();
                if (xhrobj.upload) {
                    xhrobj.upload.addEventListener('progress', function(event) {
                        var percent = 0;
                        var position = event.loaded || event.position;
                        var total = event.total;
                        if (event.lengthComputable) {
                            percent = Math.ceil(position / total * 100);
                        }
                        $.monstra.fileuploader.setProgress(percent);
                    }, false);
                }
                return xhrobj;
            },
            success: function(data){
                $.monstra.fileuploader.setProgress(100);
                $.event.trigger('uploaded.fuploader');
            },
			error: function(){
				Messenger().post({
					type: 'error',
					message : $.monstra.fileuploader.conf.errorMsg,
					hideAfter: 3
				});
                this._uploaderObj.find('.upload-progress').animate({ width: 0 }, 1);
                this._uploaderObj.find('.upload-file-pholder').show();
			}
        });
    },
    
    setProgress: function(progress){
        if (parseInt(progress) > 0) {
            this._uploaderObj.find('.upload-file-pholder').hide();
        }
        var progressBarWidth = progress * this._uploaderObj.find('.upload-area').width() / 100;
        this._uploaderObj.find('.upload-progress').animate({ width: progressBarWidth }, 10);
    },
    
    setFileNameSize: function(fname, fsize){
        var sizeStr = '';
        var sizeKB = fsize / 1024;
        if(parseInt(sizeKB) > 1024){
            var sizeMB = sizeKB/1024;
            sizeStr = sizeMB.toFixed(2)+' MB';
        } else {
            sizeStr = sizeKB.toFixed(2)+' KB';
        }
        
        this._uploaderObj.find('.upload-file-info').html(fname +' '+ sizeStr);
    }
};

// moment.js
// version : 2.1.0
// author : Tim Wood
// license : MIT
// momentjs.com
!function(t){function e(t,e){return function(n){return u(t.call(this,n),e)}}function n(t,e){return function(n){return this.lang().ordinal(t.call(this,n),e)}}function s(){}function i(t){a(this,t)}function r(t){var e=t.years||t.year||t.y||0,n=t.months||t.month||t.M||0,s=t.weeks||t.week||t.w||0,i=t.days||t.day||t.d||0,r=t.hours||t.hour||t.h||0,a=t.minutes||t.minute||t.m||0,o=t.seconds||t.second||t.s||0,u=t.milliseconds||t.millisecond||t.ms||0;this._input=t,this._milliseconds=u+1e3*o+6e4*a+36e5*r,this._days=i+7*s,this._months=n+12*e,this._data={},this._bubble()}function a(t,e){for(var n in e)e.hasOwnProperty(n)&&(t[n]=e[n]);return t}function o(t){return 0>t?Math.ceil(t):Math.floor(t)}function u(t,e){for(var n=t+"";n.length<e;)n="0"+n;return n}function h(t,e,n,s){var i,r,a=e._milliseconds,o=e._days,u=e._months;a&&t._d.setTime(+t._d+a*n),(o||u)&&(i=t.minute(),r=t.hour()),o&&t.date(t.date()+o*n),u&&t.month(t.month()+u*n),a&&!s&&H.updateOffset(t),(o||u)&&(t.minute(i),t.hour(r))}function d(t){return"[object Array]"===Object.prototype.toString.call(t)}function c(t,e){var n,s=Math.min(t.length,e.length),i=Math.abs(t.length-e.length),r=0;for(n=0;s>n;n++)~~t[n]!==~~e[n]&&r++;return r+i}function f(t){return t?ie[t]||t.toLowerCase().replace(/(.)s$/,"$1"):t}function l(t,e){return e.abbr=t,x[t]||(x[t]=new s),x[t].set(e),x[t]}function _(t){if(!t)return H.fn._lang;if(!x[t]&&A)try{require("./lang/"+t)}catch(e){return H.fn._lang}return x[t]}function m(t){return t.match(/\[.*\]/)?t.replace(/^\[|\]$/g,""):t.replace(/\\/g,"")}function y(t){var e,n,s=t.match(E);for(e=0,n=s.length;n>e;e++)s[e]=ue[s[e]]?ue[s[e]]:m(s[e]);return function(i){var r="";for(e=0;n>e;e++)r+=s[e]instanceof Function?s[e].call(i,t):s[e];return r}}function M(t,e){function n(e){return t.lang().longDateFormat(e)||e}for(var s=5;s--&&N.test(e);)e=e.replace(N,n);return re[e]||(re[e]=y(e)),re[e](t)}function g(t,e){switch(t){case"DDDD":return V;case"YYYY":return X;case"YYYYY":return $;case"S":case"SS":case"SSS":case"DDD":return I;case"MMM":case"MMMM":case"dd":case"ddd":case"dddd":return R;case"a":case"A":return _(e._l)._meridiemParse;case"X":return B;case"Z":case"ZZ":return j;case"T":return q;case"MM":case"DD":case"YY":case"HH":case"hh":case"mm":case"ss":case"M":case"D":case"d":case"H":case"h":case"m":case"s":return J;default:return new RegExp(t.replace("\\",""))}}function p(t){var e=(j.exec(t)||[])[0],n=(e+"").match(ee)||["-",0,0],s=+(60*n[1])+~~n[2];return"+"===n[0]?-s:s}function D(t,e,n){var s,i=n._a;switch(t){case"M":case"MM":i[1]=null==e?0:~~e-1;break;case"MMM":case"MMMM":s=_(n._l).monthsParse(e),null!=s?i[1]=s:n._isValid=!1;break;case"D":case"DD":case"DDD":case"DDDD":null!=e&&(i[2]=~~e);break;case"YY":i[0]=~~e+(~~e>68?1900:2e3);break;case"YYYY":case"YYYYY":i[0]=~~e;break;case"a":case"A":n._isPm=_(n._l).isPM(e);break;case"H":case"HH":case"h":case"hh":i[3]=~~e;break;case"m":case"mm":i[4]=~~e;break;case"s":case"ss":i[5]=~~e;break;case"S":case"SS":case"SSS":i[6]=~~(1e3*("0."+e));break;case"X":n._d=new Date(1e3*parseFloat(e));break;case"Z":case"ZZ":n._useUTC=!0,n._tzm=p(e)}null==e&&(n._isValid=!1)}function Y(t){var e,n,s=[];if(!t._d){for(e=0;7>e;e++)t._a[e]=s[e]=null==t._a[e]?2===e?1:0:t._a[e];s[3]+=~~((t._tzm||0)/60),s[4]+=~~((t._tzm||0)%60),n=new Date(0),t._useUTC?(n.setUTCFullYear(s[0],s[1],s[2]),n.setUTCHours(s[3],s[4],s[5],s[6])):(n.setFullYear(s[0],s[1],s[2]),n.setHours(s[3],s[4],s[5],s[6])),t._d=n}}function w(t){var e,n,s=t._f.match(E),i=t._i;for(t._a=[],e=0;e<s.length;e++)n=(g(s[e],t).exec(i)||[])[0],n&&(i=i.slice(i.indexOf(n)+n.length)),ue[s[e]]&&D(s[e],n,t);i&&(t._il=i),t._isPm&&t._a[3]<12&&(t._a[3]+=12),t._isPm===!1&&12===t._a[3]&&(t._a[3]=0),Y(t)}function k(t){var e,n,s,r,o,u=99;for(r=0;r<t._f.length;r++)e=a({},t),e._f=t._f[r],w(e),n=new i(e),o=c(e._a,n.toArray()),n._il&&(o+=n._il.length),u>o&&(u=o,s=n);a(t,s)}function v(t){var e,n=t._i,s=K.exec(n);if(s){for(t._f="YYYY-MM-DD"+(s[2]||" "),e=0;4>e;e++)if(te[e][1].exec(n)){t._f+=te[e][0];break}j.exec(n)&&(t._f+=" Z"),w(t)}else t._d=new Date(n)}function T(e){var n=e._i,s=G.exec(n);n===t?e._d=new Date:s?e._d=new Date(+s[1]):"string"==typeof n?v(e):d(n)?(e._a=n.slice(0),Y(e)):e._d=n instanceof Date?new Date(+n):new Date(n)}function b(t,e,n,s,i){return i.relativeTime(e||1,!!n,t,s)}function S(t,e,n){var s=W(Math.abs(t)/1e3),i=W(s/60),r=W(i/60),a=W(r/24),o=W(a/365),u=45>s&&["s",s]||1===i&&["m"]||45>i&&["mm",i]||1===r&&["h"]||22>r&&["hh",r]||1===a&&["d"]||25>=a&&["dd",a]||45>=a&&["M"]||345>a&&["MM",W(a/30)]||1===o&&["y"]||["yy",o];return u[2]=e,u[3]=t>0,u[4]=n,b.apply({},u)}function F(t,e,n){var s,i=n-e,r=n-t.day();return r>i&&(r-=7),i-7>r&&(r+=7),s=H(t).add("d",r),{week:Math.ceil(s.dayOfYear()/7),year:s.year()}}function O(t){var e=t._i,n=t._f;return null===e||""===e?null:("string"==typeof e&&(t._i=e=_().preparse(e)),H.isMoment(e)?(t=a({},e),t._d=new Date(+e._d)):n?d(n)?k(t):w(t):T(t),new i(t))}function z(t,e){H.fn[t]=H.fn[t+"s"]=function(t){var n=this._isUTC?"UTC":"";return null!=t?(this._d["set"+n+e](t),H.updateOffset(this),this):this._d["get"+n+e]()}}function C(t){H.duration.fn[t]=function(){return this._data[t]}}function L(t,e){H.duration.fn["as"+t]=function(){return+this/e}}for(var H,P,U="2.1.0",W=Math.round,x={},A="undefined"!=typeof module&&module.exports,G=/^\/?Date\((\-?\d+)/i,Z=/(\-)?(\d*)?\.?(\d+)\:(\d+)\:(\d+)\.?(\d{3})?/,E=/(\[[^\[]*\])|(\\)?(Mo|MM?M?M?|Do|DDDo|DD?D?D?|ddd?d?|do?|w[o|w]?|W[o|W]?|YYYYY|YYYY|YY|gg(ggg?)?|GG(GGG?)?|e|E|a|A|hh?|HH?|mm?|ss?|SS?S?|X|zz?|ZZ?|.)/g,N=/(\[[^\[]*\])|(\\)?(LT|LL?L?L?|l{1,4})/g,J=/\d\d?/,I=/\d{1,3}/,V=/\d{3}/,X=/\d{1,4}/,$=/[+\-]?\d{1,6}/,R=/[0-9]*['a-z\u00A0-\u05FF\u0700-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+|[\u0600-\u06FF\/]+(\s*?[\u0600-\u06FF]+){1,2}/i,j=/Z|[\+\-]\d\d:?\d\d/i,q=/T/i,B=/[\+\-]?\d+(\.\d{1,3})?/,K=/^\s*\d{4}-\d\d-\d\d((T| )(\d\d(:\d\d(:\d\d(\.\d\d?\d?)?)?)?)?([\+\-]\d\d:?\d\d)?)?/,Q="YYYY-MM-DDTHH:mm:ssZ",te=[["HH:mm:ss.S",/(T| )\d\d:\d\d:\d\d\.\d{1,3}/],["HH:mm:ss",/(T| )\d\d:\d\d:\d\d/],["HH:mm",/(T| )\d\d:\d\d/],["HH",/(T| )\d\d/]],ee=/([\+\-]|\d\d)/gi,ne="Date|Hours|Minutes|Seconds|Milliseconds".split("|"),se={Milliseconds:1,Seconds:1e3,Minutes:6e4,Hours:36e5,Days:864e5,Months:2592e6,Years:31536e6},ie={ms:"millisecond",s:"second",m:"minute",h:"hour",d:"day",w:"week",M:"month",y:"year"},re={},ae="DDD w W M D d".split(" "),oe="M D H h m s w W".split(" "),ue={M:function(){return this.month()+1},MMM:function(t){return this.lang().monthsShort(this,t)},MMMM:function(t){return this.lang().months(this,t)},D:function(){return this.date()},DDD:function(){return this.dayOfYear()},d:function(){return this.day()},dd:function(t){return this.lang().weekdaysMin(this,t)},ddd:function(t){return this.lang().weekdaysShort(this,t)},dddd:function(t){return this.lang().weekdays(this,t)},w:function(){return this.week()},W:function(){return this.isoWeek()},YY:function(){return u(this.year()%100,2)},YYYY:function(){return u(this.year(),4)},YYYYY:function(){return u(this.year(),5)},gg:function(){return u(this.weekYear()%100,2)},gggg:function(){return this.weekYear()},ggggg:function(){return u(this.weekYear(),5)},GG:function(){return u(this.isoWeekYear()%100,2)},GGGG:function(){return this.isoWeekYear()},GGGGG:function(){return u(this.isoWeekYear(),5)},e:function(){return this.weekday()},E:function(){return this.isoWeekday()},a:function(){return this.lang().meridiem(this.hours(),this.minutes(),!0)},A:function(){return this.lang().meridiem(this.hours(),this.minutes(),!1)},H:function(){return this.hours()},h:function(){return this.hours()%12||12},m:function(){return this.minutes()},s:function(){return this.seconds()},S:function(){return~~(this.milliseconds()/100)},SS:function(){return u(~~(this.milliseconds()/10),2)},SSS:function(){return u(this.milliseconds(),3)},Z:function(){var t=-this.zone(),e="+";return 0>t&&(t=-t,e="-"),e+u(~~(t/60),2)+":"+u(~~t%60,2)},ZZ:function(){var t=-this.zone(),e="+";return 0>t&&(t=-t,e="-"),e+u(~~(10*t/6),4)},z:function(){return this.zoneAbbr()},zz:function(){return this.zoneName()},X:function(){return this.unix()}};ae.length;)P=ae.pop(),ue[P+"o"]=n(ue[P],P);for(;oe.length;)P=oe.pop(),ue[P+P]=e(ue[P],2);for(ue.DDDD=e(ue.DDD,3),s.prototype={set:function(t){var e,n;for(n in t)e=t[n],"function"==typeof e?this[n]=e:this["_"+n]=e},_months:"January_February_March_April_May_June_July_August_September_October_November_December".split("_"),months:function(t){return this._months[t.month()]},_monthsShort:"Jan_Feb_Mar_Apr_May_Jun_Jul_Aug_Sep_Oct_Nov_Dec".split("_"),monthsShort:function(t){return this._monthsShort[t.month()]},monthsParse:function(t){var e,n,s;for(this._monthsParse||(this._monthsParse=[]),e=0;12>e;e++)if(this._monthsParse[e]||(n=H([2e3,e]),s="^"+this.months(n,"")+"|^"+this.monthsShort(n,""),this._monthsParse[e]=new RegExp(s.replace(".",""),"i")),this._monthsParse[e].test(t))return e},_weekdays:"Sunday_Monday_Tuesday_Wednesday_Thursday_Friday_Saturday".split("_"),weekdays:function(t){return this._weekdays[t.day()]},_weekdaysShort:"Sun_Mon_Tue_Wed_Thu_Fri_Sat".split("_"),weekdaysShort:function(t){return this._weekdaysShort[t.day()]},_weekdaysMin:"Su_Mo_Tu_We_Th_Fr_Sa".split("_"),weekdaysMin:function(t){return this._weekdaysMin[t.day()]},weekdaysParse:function(t){var e,n,s;for(this._weekdaysParse||(this._weekdaysParse=[]),e=0;7>e;e++)if(this._weekdaysParse[e]||(n=H([2e3,1]).day(e),s="^"+this.weekdays(n,"")+"|^"+this.weekdaysShort(n,"")+"|^"+this.weekdaysMin(n,""),this._weekdaysParse[e]=new RegExp(s.replace(".",""),"i")),this._weekdaysParse[e].test(t))return e},_longDateFormat:{LT:"h:mm A",L:"MM/DD/YYYY",LL:"MMMM D YYYY",LLL:"MMMM D YYYY LT",LLLL:"dddd, MMMM D YYYY LT"},longDateFormat:function(t){var e=this._longDateFormat[t];return!e&&this._longDateFormat[t.toUpperCase()]&&(e=this._longDateFormat[t.toUpperCase()].replace(/MMMM|MM|DD|dddd/g,function(t){return t.slice(1)}),this._longDateFormat[t]=e),e},isPM:function(t){return"p"===(t+"").toLowerCase()[0]},_meridiemParse:/[ap]\.?m?\.?/i,meridiem:function(t,e,n){return t>11?n?"pm":"PM":n?"am":"AM"},_calendar:{sameDay:"[Today at] LT",nextDay:"[Tomorrow at] LT",nextWeek:"dddd [at] LT",lastDay:"[Yesterday at] LT",lastWeek:"[Last] dddd [at] LT",sameElse:"L"},calendar:function(t,e){var n=this._calendar[t];return"function"==typeof n?n.apply(e):n},_relativeTime:{future:"in %s",past:"%s ago",s:"a few seconds",m:"a minute",mm:"%d minutes",h:"an hour",hh:"%d hours",d:"a day",dd:"%d days",M:"a month",MM:"%d months",y:"a year",yy:"%d years"},relativeTime:function(t,e,n,s){var i=this._relativeTime[n];return"function"==typeof i?i(t,e,n,s):i.replace(/%d/i,t)},pastFuture:function(t,e){var n=this._relativeTime[t>0?"future":"past"];return"function"==typeof n?n(e):n.replace(/%s/i,e)},ordinal:function(t){return this._ordinal.replace("%d",t)},_ordinal:"%d",preparse:function(t){return t},postformat:function(t){return t},week:function(t){return F(t,this._week.dow,this._week.doy).week},_week:{dow:0,doy:6}},H=function(t,e,n){return O({_i:t,_f:e,_l:n,_isUTC:!1})},H.utc=function(t,e,n){return O({_useUTC:!0,_isUTC:!0,_l:n,_i:t,_f:e})},H.unix=function(t){return H(1e3*t)},H.duration=function(t,e){var n,s,i=H.isDuration(t),a="number"==typeof t,o=i?t._input:a?{}:t,u=Z.exec(t);return a?e?o[e]=t:o.milliseconds=t:u&&(n="-"===u[1]?-1:1,o={y:0,d:~~u[2]*n,h:~~u[3]*n,m:~~u[4]*n,s:~~u[5]*n,ms:~~u[6]*n}),s=new r(o),i&&t.hasOwnProperty("_lang")&&(s._lang=t._lang),s},H.version=U,H.defaultFormat=Q,H.updateOffset=function(){},H.lang=function(t,e){return t?(e?l(t,e):x[t]||_(t),H.duration.fn._lang=H.fn._lang=_(t),void 0):H.fn._lang._abbr},H.langData=function(t){return t&&t._lang&&t._lang._abbr&&(t=t._lang._abbr),_(t)},H.isMoment=function(t){return t instanceof i},H.isDuration=function(t){return t instanceof r},H.fn=i.prototype={clone:function(){return H(this)},valueOf:function(){return+this._d+6e4*(this._offset||0)},unix:function(){return Math.floor(+this/1e3)},toString:function(){return this.format("ddd MMM DD YYYY HH:mm:ss [GMT]ZZ")},toDate:function(){return this._offset?new Date(+this):this._d},toISOString:function(){return M(H(this).utc(),"YYYY-MM-DD[T]HH:mm:ss.SSS[Z]")},toArray:function(){var t=this;return[t.year(),t.month(),t.date(),t.hours(),t.minutes(),t.seconds(),t.milliseconds()]},isValid:function(){return null==this._isValid&&(this._isValid=this._a?!c(this._a,(this._isUTC?H.utc(this._a):H(this._a)).toArray()):!isNaN(this._d.getTime())),!!this._isValid},utc:function(){return this.zone(0)},local:function(){return this.zone(0),this._isUTC=!1,this},format:function(t){var e=M(this,t||H.defaultFormat);return this.lang().postformat(e)},add:function(t,e){var n;return n="string"==typeof t?H.duration(+e,t):H.duration(t,e),h(this,n,1),this},subtract:function(t,e){var n;return n="string"==typeof t?H.duration(+e,t):H.duration(t,e),h(this,n,-1),this},diff:function(t,e,n){var s,i,r=this._isUTC?H(t).zone(this._offset||0):H(t).local(),a=6e4*(this.zone()-r.zone());return e=f(e),"year"===e||"month"===e?(s=432e5*(this.daysInMonth()+r.daysInMonth()),i=12*(this.year()-r.year())+(this.month()-r.month()),i+=(this-H(this).startOf("month")-(r-H(r).startOf("month")))/s,i-=6e4*(this.zone()-H(this).startOf("month").zone()-(r.zone()-H(r).startOf("month").zone()))/s,"year"===e&&(i/=12)):(s=this-r,i="second"===e?s/1e3:"minute"===e?s/6e4:"hour"===e?s/36e5:"day"===e?(s-a)/864e5:"week"===e?(s-a)/6048e5:s),n?i:o(i)},from:function(t,e){return H.duration(this.diff(t)).lang(this.lang()._abbr).humanize(!e)},fromNow:function(t){return this.from(H(),t)},calendar:function(){var t=this.diff(H().startOf("day"),"days",!0),e=-6>t?"sameElse":-1>t?"lastWeek":0>t?"lastDay":1>t?"sameDay":2>t?"nextDay":7>t?"nextWeek":"sameElse";return this.format(this.lang().calendar(e,this))},isLeapYear:function(){var t=this.year();return 0===t%4&&0!==t%100||0===t%400},isDST:function(){return this.zone()<this.clone().month(0).zone()||this.zone()<this.clone().month(5).zone()},day:function(t){var e=this._isUTC?this._d.getUTCDay():this._d.getDay();return null!=t?"string"==typeof t&&(t=this.lang().weekdaysParse(t),"number"!=typeof t)?this:this.add({d:t-e}):e},month:function(t){var e,n=this._isUTC?"UTC":"";return null!=t?"string"==typeof t&&(t=this.lang().monthsParse(t),"number"!=typeof t)?this:(e=this.date(),this.date(1),this._d["set"+n+"Month"](t),this.date(Math.min(e,this.daysInMonth())),H.updateOffset(this),this):this._d["get"+n+"Month"]()},startOf:function(t){switch(t=f(t)){case"year":this.month(0);case"month":this.date(1);case"week":case"day":this.hours(0);case"hour":this.minutes(0);case"minute":this.seconds(0);case"second":this.milliseconds(0)}return"week"===t&&this.weekday(0),this},endOf:function(t){return this.startOf(t).add(t,1).subtract("ms",1)},isAfter:function(t,e){return e="undefined"!=typeof e?e:"millisecond",+this.clone().startOf(e)>+H(t).startOf(e)},isBefore:function(t,e){return e="undefined"!=typeof e?e:"millisecond",+this.clone().startOf(e)<+H(t).startOf(e)},isSame:function(t,e){return e="undefined"!=typeof e?e:"millisecond",+this.clone().startOf(e)===+H(t).startOf(e)},min:function(t){return t=H.apply(null,arguments),this>t?this:t},max:function(t){return t=H.apply(null,arguments),t>this?this:t},zone:function(t){var e=this._offset||0;return null==t?this._isUTC?e:this._d.getTimezoneOffset():("string"==typeof t&&(t=p(t)),Math.abs(t)<16&&(t=60*t),this._offset=t,this._isUTC=!0,e!==t&&h(this,H.duration(e-t,"m"),1,!0),this)},zoneAbbr:function(){return this._isUTC?"UTC":""},zoneName:function(){return this._isUTC?"Coordinated Universal Time":""},daysInMonth:function(){return H.utc([this.year(),this.month()+1,0]).date()},dayOfYear:function(t){var e=W((H(this).startOf("day")-H(this).startOf("year"))/864e5)+1;return null==t?e:this.add("d",t-e)},weekYear:function(t){var e=F(this,this.lang()._week.dow,this.lang()._week.doy).year;return null==t?e:this.add("y",t-e)},isoWeekYear:function(t){var e=F(this,1,4).year;return null==t?e:this.add("y",t-e)},week:function(t){var e=this.lang().week(this);return null==t?e:this.add("d",7*(t-e))},isoWeek:function(t){var e=F(this,1,4).week;return null==t?e:this.add("d",7*(t-e))},weekday:function(t){var e=(this._d.getDay()+7-this.lang()._week.dow)%7;return null==t?e:this.add("d",t-e)},isoWeekday:function(t){return null==t?this.day()||7:this.day(this.day()%7?t:t-7)},lang:function(e){return e===t?this._lang:(this._lang=_(e),this)}},P=0;P<ne.length;P++)z(ne[P].toLowerCase().replace(/s$/,""),ne[P]);z("year","FullYear"),H.fn.days=H.fn.day,H.fn.months=H.fn.month,H.fn.weeks=H.fn.week,H.fn.isoWeeks=H.fn.isoWeek,H.fn.toJSON=H.fn.toISOString,H.duration.fn=r.prototype={_bubble:function(){var t,e,n,s,i=this._milliseconds,r=this._days,a=this._months,u=this._data;u.milliseconds=i%1e3,t=o(i/1e3),u.seconds=t%60,e=o(t/60),u.minutes=e%60,n=o(e/60),u.hours=n%24,r+=o(n/24),u.days=r%30,a+=o(r/30),u.months=a%12,s=o(a/12),u.years=s},weeks:function(){return o(this.days()/7)},valueOf:function(){return this._milliseconds+864e5*this._days+2592e6*(this._months%12)+31536e6*~~(this._months/12)},humanize:function(t){var e=+this,n=S(e,!t,this.lang());return t&&(n=this.lang().pastFuture(e,n)),this.lang().postformat(n)},add:function(t,e){var n=H.duration(t,e);return this._milliseconds+=n._milliseconds,this._days+=n._days,this._months+=n._months,this._bubble(),this},subtract:function(t,e){var n=H.duration(t,e);return this._milliseconds-=n._milliseconds,this._days-=n._days,this._months-=n._months,this._bubble(),this},get:function(t){return t=f(t),this[t.toLowerCase()+"s"]()},as:function(t){return t=f(t),this["as"+t.charAt(0).toUpperCase()+t.slice(1)+"s"]()},lang:H.fn.lang};for(P in se)se.hasOwnProperty(P)&&(L(P,se[P]),C(P.toLowerCase()));L("Weeks",6048e5),H.duration.fn.asMonths=function(){return(+this-31536e6*this.years())/2592e6+12*this.years()},H.lang("en",{ordinal:function(t){var e=t%10,n=1===~~(t%100/10)?"th":1===e?"st":2===e?"nd":3===e?"rd":"th";return t+n}}),A&&(module.exports=H),"undefined"==typeof ender&&(this.moment=H),"function"==typeof define&&define.amd&&define("moment",[],function(){return H})}.call(this);

if (typeof $.monstra == 'undefined') $.monstra = {};

$.monstra.plugins = {

    init: function(){
        if (window.location.hash && $('a[href="'+ window.location.hash +'"]')) {
            $('a[href="'+ window.location.hash +'"]').click();
        }
    }

};

$(document).ready(function(){
    $.monstra.plugins.init();
});
if (typeof $.monstra == 'undefined') $.monstra = {};

$.monstra.fileuploader = {
    
    conf: {
        uploadUrl: '',
        csrf: '',
		errorMsg: '',
        uploaderId: ''
    },

    _uploaderObj: null,

    init: function(conf){
        if (!conf.uploaderId) {
            throw 'uploaderId not specified';
        }
        $.extend(this.conf, conf);
        this._uploaderObj = $('#'+ this.conf.uploaderId);
        var area = this._uploaderObj.find('.upload-area');
        area.off('dragenter.fuploader').on('dragenter.fuploader', function(e){
            e.stopPropagation();
            e.preventDefault();
            $(this).addClass('upload-area-dragenter');
        });
        area.off('dragover.fuploader').on('dragover.fuploader', function(e){
            e.stopPropagation();
            e.preventDefault();
        });
        area.off('drop.fuploader').on('drop.fuploader', function(e){
            $(this).removeClass('upload-area-dragenter').removeClass('upload-area-dragover').addClass('upload-area-drop');
            e.preventDefault();
            var files = e.originalEvent.dataTransfer.files;
            $.monstra.fileuploader.uploadFileHandle(files, area);
        });
        $(document).off('dragover.fuploader').on('dragover.fuploader', function(e){
            e.stopPropagation();
            e.preventDefault();
            area.removeClass('upload-area-dragenter').removeClass('upload-area-drop').addClass('upload-area-dragover');
        });
        $(document).off('dragenter.fuploader').on('dragenter.fuploader', function(e){
            e.stopPropagation();
            e.preventDefault();
        });
        $(document).off('drop.fuploader').on('drop.fuploader', function(e){
            e.stopPropagation();
            e.preventDefault();
        });
    },
    
    uploadFileHandle: function(files, area){
        for (var i = 0; i < files.length; i++){
            var fd = new FormData();
            fd.append('file', files[i]);
            fd.append('upload_file', 'upload_file');
			fd.append('dragndrop', '1');
            fd.append('csrf', $.monstra.fileuploader.conf.csrf);
            //this.setFileNameSize(files[i].name, files[i].size);
            
            this.uploadFile(fd, status);
        }
    },
    
    uploadFile: function(formData, status){
        var jqXHR = $.ajax({
            url: $.monstra.fileuploader.conf.uploadUrl,
            type: 'POST',
            contentType: false,
            processData: false,
            cache: false,
            data: formData,
            xhr: function() {
                var xhrobj = $.ajaxSettings.xhr();
                if (xhrobj.upload) {
                    xhrobj.upload.addEventListener('progress', function(event) {
                        var percent = 0;
                        var position = event.loaded || event.position;
                        var total = event.total;
                        if (event.lengthComputable) {
                            percent = Math.ceil(position / total * 100);
                        }
                        $.monstra.fileuploader.setProgress(percent);
                    }, false);
                }
                return xhrobj;
            },
            success: function(data){
                $.monstra.fileuploader.setProgress(100);
                $.event.trigger('uploaded.fuploader');
            },
			error: function(){
				Messenger().post({
					type: 'error',
					message : $.monstra.fileuploader.conf.errorMsg,
					hideAfter: 3
				});
                this._uploaderObj.find('.upload-progress').animate({ width: 0 }, 1);
                this._uploaderObj.find('.upload-file-pholder').show();
			}
        });
    },
    
    setProgress: function(progress){
        if (parseInt(progress) > 0) {
            this._uploaderObj.find('.upload-file-pholder').hide();
        }
        var progressBarWidth = progress * this._uploaderObj.find('.upload-area').width() / 100;
        this._uploaderObj.find('.upload-progress').animate({ width: progressBarWidth }, 10);
    },
    
    setFileNameSize: function(fname, fsize){
        var sizeStr = '';
        var sizeKB = fsize / 1024;
        if(parseInt(sizeKB) > 1024){
            var sizeMB = sizeKB/1024;
            sizeStr = sizeMB.toFixed(2)+' MB';
        } else {
            sizeStr = sizeKB.toFixed(2)+' KB';
        }
        
        this._uploaderObj.find('.upload-file-info').html(fname +' '+ sizeStr);
    }
};

/**
* @version: 1.3.2
* @author: Dan Grossman http://www.dangrossman.info/
* @date: 2014-01-22
* @copyright: Copyright (c) 2012-2014 Dan Grossman. All rights reserved.
* @license: Licensed under Apache License v2.0. See http://www.apache.org/licenses/LICENSE-2.0
* @website: http://www.improvely.com/
*/
!function ($) {

    var DateRangePicker = function (element, options, cb) {

        // by default, the daterangepicker element is placed at the bottom of HTML body
        this.parentEl = 'body';

        //element that triggered the date range picker
        this.element = $(element);

        //create the picker HTML object
        var DRPTemplate = '<div class="daterangepicker dropdown-menu">' +
                '<div class="calendar left"></div>' +
                '<div class="calendar right"></div>' +
                '<div class="ranges">' +
                  '<div class="range_inputs">' +
                    '<div class="daterangepicker_start_input">' +
                      '<label for="daterangepicker_start"></label>' +
                      '<input class="input-mini" type="text" name="daterangepicker_start" value="" disabled="disabled" />' +
                    '</div>' +
                    '<div class="daterangepicker_end_input">' +
                      '<label for="daterangepicker_end"></label>' +
                      '<input class="input-mini" type="text" name="daterangepicker_end" value="" disabled="disabled" />' +
                    '</div>' +
                    '<button class="applyBtn" disabled="disabled"></button>&nbsp;' +
                    '<button class="cancelBtn"></button>' +
                  '</div>' +
                '</div>' +
              '</div>';

        this.parentEl = (typeof options == 'object' && options.parentEl && $(options.parentEl)) || $(this.parentEl);
        this.container = $(DRPTemplate).appendTo(this.parentEl);

        //custom options
        if (typeof options != 'object')
            options = {};
        this.setOptions(options, cb);

        //apply CSS classes and labels to buttons
        var c = this.container;
        $.each(this.buttonClasses, function (idx, val) {
            c.find('button').addClass(val);
        });
        this.container.find('.daterangepicker_start_input label').html(this.locale.fromLabel);
        this.container.find('.daterangepicker_end_input label').html(this.locale.toLabel);
        if (this.applyClass.length)
            this.container.find('.applyBtn').addClass(this.applyClass);
        if (this.cancelClass.length)
            this.container.find('.cancelBtn').addClass(this.cancelClass);
        this.container.find('.applyBtn').html(this.locale.applyLabel);
        this.container.find('.cancelBtn').html(this.locale.cancelLabel);

        //event listeners
        this.container.on('mousedown', $.proxy(this.mousedown, this));

        this.container.find('.calendar')
            .on('click', '.prev', $.proxy(this.clickPrev, this))
            .on('click', '.next', $.proxy(this.clickNext, this))
            .on('click', 'td.available', $.proxy(this.clickDate, this))
            .on('mouseenter', 'td.available', $.proxy(this.enterDate, this))
            .on('mouseleave', 'td.available', $.proxy(this.updateFormInputs, this))
            .on('change', 'select.yearselect', $.proxy(this.updateMonthYear, this))
            .on('change', 'select.monthselect', $.proxy(this.updateMonthYear, this))
            .on('change', 'select.hourselect,select.minuteselect,select.ampmselect', $.proxy(this.updateTime, this));

        this.container.find('.ranges')
            .on('click', 'button.applyBtn', $.proxy(this.clickApply, this))
            .on('click', 'button.cancelBtn', $.proxy(this.clickCancel, this))
            .on('click', '.daterangepicker_start_input,.daterangepicker_end_input', $.proxy(this.showCalendars, this))
            .on('click', 'li', $.proxy(this.clickRange, this))
            .on('mouseenter', 'li', $.proxy(this.enterRange, this))
            .on('mouseleave', 'li', $.proxy(this.updateFormInputs, this));

        if (this.element.is('input')) {
            this.element.on({
                'click.daterangepicker': $.proxy(this.show, this),
                'focus.daterangepicker': $.proxy(this.show, this),
                'keyup.daterangepicker': $.proxy(this.updateFromControl, this)
            });
        } else {
            this.element.on('click.daterangepicker', $.proxy(this.show, this));
        }

    };

    DateRangePicker.prototype = {

        constructor: DateRangePicker,

        setOptions: function(options, callback) {

            this.startDate = moment().startOf('day');
            this.endDate = moment().startOf('day');
            this.minDate = false;
            this.maxDate = false;
            this.dateLimit = false;

            this.showDropdowns = false;
            this.showWeekNumbers = false;
            this.timePicker = false;
            this.timePickerIncrement = 30;
            this.timePicker12Hour = true;
            this.singleDatePicker = false;
            this.ranges = {};

            this.opens = 'right';
            if (this.element.hasClass('pull-right'))
                this.opens = 'left';

            this.buttonClasses = ['btn', 'btn-small'];
            this.applyClass = 'btn-success';
            this.cancelClass = 'btn-default';

            this.format = 'MM/DD/YYYY';
            this.separator = ' - ';

            this.locale = {
                applyLabel: 'Apply',
                cancelLabel: 'Cancel',
                fromLabel: 'From',
                toLabel: 'To',
                weekLabel: 'W',
                customRangeLabel: 'Custom Range',
                daysOfWeek: moment()._lang._weekdaysMin.slice(),
                monthNames: moment()._lang._monthsShort.slice(),
                firstDay: 0
            };

            this.cb = function () { };

            if (typeof options.format == 'string')
                this.format = options.format;

            if (typeof options.separator == 'string')
                this.separator = options.separator;

            if (typeof options.startDate == 'string')
                this.startDate = moment(options.startDate, this.format);

            if (typeof options.endDate == 'string')
                this.endDate = moment(options.endDate, this.format);

            if (typeof options.minDate == 'string')
                this.minDate = moment(options.minDate, this.format);

            if (typeof options.maxDate == 'string')
                this.maxDate = moment(options.maxDate, this.format);

            if (typeof options.startDate == 'object')
                this.startDate = moment(options.startDate);

            if (typeof options.endDate == 'object')
                this.endDate = moment(options.endDate);

            if (typeof options.minDate == 'object')
                this.minDate = moment(options.minDate);

            if (typeof options.maxDate == 'object')
                this.maxDate = moment(options.maxDate);

            if (typeof options.applyClass == 'string')
                this.applyClass = options.applyClass;

            if (typeof options.cancelClass == 'string')
                this.cancelClass = options.cancelClass;

            if (typeof options.dateLimit == 'object')
                this.dateLimit = options.dateLimit;

            // update day names order to firstDay
            if (typeof options.locale == 'object') {

                if (typeof options.locale.daysOfWeek == 'object') {
                    // Create a copy of daysOfWeek to avoid modification of original
                    // options object for reusability in multiple daterangepicker instances
                    this.locale.daysOfWeek = options.locale.daysOfWeek.slice();
                }

                if (typeof options.locale.monthNames == 'object') {
                  this.locale.monthNames = options.locale.monthNames.slice();
                }

                if (typeof options.locale.firstDay == 'number') {
                    this.locale.firstDay = options.locale.firstDay;
                    var iterator = options.locale.firstDay;
                    while (iterator > 0) {
                        this.locale.daysOfWeek.push(this.locale.daysOfWeek.shift());
                        iterator--;
                    }
                }

                if (typeof options.locale.applyLabel == 'string') {
                  this.locale.applyLabel = options.locale.applyLabel;
                }

                if (typeof options.locale.cancelLabel == 'string') {
                  this.locale.cancelLabel = options.locale.cancelLabel;
                }

                if (typeof options.locale.fromLabel == 'string') {
                  this.locale.fromLabel = options.locale.fromLabel;
                }

                if (typeof options.locale.toLabel == 'string') {
                  this.locale.toLabel = options.locale.toLabel;
                }

                if (typeof options.locale.weekLabel == 'string') {
                  this.locale.weekLabel = options.locale.weekLabel;
                }

                if (typeof options.locale.customRangeLabel == 'string') {
                  this.locale.customRangeLabel = options.locale.customRangeLabel;
                }
            }

            if (typeof options.opens == 'string')
                this.opens = options.opens;

            if (typeof options.showWeekNumbers == 'boolean') {
                this.showWeekNumbers = options.showWeekNumbers;
            }

            if (typeof options.buttonClasses == 'string') {
                this.buttonClasses = [options.buttonClasses];
            }

            if (typeof options.buttonClasses == 'object') {
                this.buttonClasses = options.buttonClasses;
            }

            if (typeof options.showDropdowns == 'boolean') {
                this.showDropdowns = options.showDropdowns;
            }

            if (typeof options.singleDatePicker == 'boolean') {
                this.singleDatePicker = options.singleDatePicker;
            }

            if (typeof options.timePicker == 'boolean') {
                this.timePicker = options.timePicker;
            }

            if (typeof options.timePickerIncrement == 'number') {
                this.timePickerIncrement = options.timePickerIncrement;
            }

            if (typeof options.timePicker12Hour == 'boolean') {
                this.timePicker12Hour = options.timePicker12Hour;
            }

            //if no start/end dates set, check if an input element contains initial values
            if (typeof options.startDate == 'undefined' && typeof options.endDate == 'undefined') {
                if ($(this.element).is('input[type=text]')) {
                    var val = $(this.element).val();
                    var split = val.split(this.separator);
                    var start, end;
                    if (split.length == 2) {
                        start = moment(split[0], this.format);
                        end = moment(split[1], this.format);
                    } else if (this.singleDatePicker) {
                        start = moment(val, this.format);
                        end = moment(val, this.format);
                    }
                    if (start != null && end != null) {
                        this.startDate = start;
                        this.endDate = end;
                    }
                }
            }

            if (typeof options.ranges == 'object') {
                for (var range in options.ranges) {

                    var start = moment(options.ranges[range][0]);
                    var end = moment(options.ranges[range][1]);

                    // If we have a min/max date set, bound this range
                    // to it, but only if it would otherwise fall
                    // outside of the min/max.
                    if (this.minDate && start.isBefore(this.minDate))
                        start = moment(this.minDate);

                    if (this.maxDate && end.isAfter(this.maxDate))
                        end = moment(this.maxDate);

                    // If the end of the range is before the minimum (if min is set) OR
                    // the start of the range is after the max (also if set) don't display this
                    // range option.
                    if ((this.minDate && end.isBefore(this.minDate)) || (this.maxDate && start.isAfter(this.maxDate))) {
                        continue;
                    }

                    this.ranges[range] = [start, end];
                }

                var list = '<ul>';
                for (var range in this.ranges) {
                    list += '<li>' + range + '</li>';
                }
                list += '<li>' + this.locale.customRangeLabel + '</li>';
                list += '</ul>';
                this.container.find('.ranges ul').remove();
                this.container.find('.ranges').prepend(list);
            }

            if (typeof callback == 'function') {
                this.cb = callback;
            }

            if (!this.timePicker) {
                this.startDate = this.startDate.startOf('day');
                this.endDate = this.endDate.startOf('day');
            }

            if (this.singleDatePicker) {
                this.opens = 'right';
                this.container.find('.calendar.right').show();
                this.container.find('.calendar.left').hide();
                this.container.find('.ranges').hide();
                if (!this.container.find('.calendar.right').hasClass('single'))
                    this.container.find('.calendar.right').addClass('single');
            } else {
                this.container.find('.calendar.right').removeClass('single');
                this.container.find('.ranges').show();
            }

            this.oldStartDate = this.startDate.clone();
            this.oldEndDate = this.endDate.clone();

            this.leftCalendar = {
                month: moment([this.startDate.year(), this.startDate.month(), 1, this.startDate.hour(), this.startDate.minute()]),
                calendar: []
            };

            this.rightCalendar = {
                month: moment([this.endDate.year(), this.endDate.month(), 1, this.endDate.hour(), this.endDate.minute()]),
                calendar: []
            };

            if (this.opens == 'right') {
                //swap calendar positions
                var left = this.container.find('.calendar.left');
                var right = this.container.find('.calendar.right');
                left.removeClass('left').addClass('right');
                right.removeClass('right').addClass('left');
            }

            if (typeof options.ranges == 'undefined' && !this.singleDatePicker) {
                this.container.find('.calendar').show();
            }

            this.container.addClass('opens' + this.opens);

            this.updateView();
            this.updateCalendars()

        },

        setStartDate: function(startDate) {
            if (typeof startDate == 'string')
                this.startDate = moment(startDate, this.format);

            if (typeof startDate == 'object')
                this.startDate = moment(startDate);

            if (!this.timePicker)
                this.startDate = this.startDate.startOf('day');

            this.oldStartDate = this.startDate.clone();

            this.updateView();
            this.updateCalendars();
        },

        setEndDate: function(endDate) {
            if (typeof endDate == 'string')
                this.endDate = moment(endDate, this.format);

            if (typeof endDate == 'object')
                this.endDate = moment(endDate);

            if (!this.timePicker)
                this.endDate = this.endDate.startOf('day');

            this.oldEndDate = this.endDate.clone();

            this.updateView();
            this.updateCalendars();
        },

        mousedown: function (e) {
            e.stopPropagation();
        },

        updateView: function () {
            this.leftCalendar.month.month(this.startDate.month()).year(this.startDate.year());
            this.rightCalendar.month.month(this.endDate.month()).year(this.endDate.year());
            this.updateFormInputs();
        },

        updateFormInputs: function () {
            this.container.find('input[name=daterangepicker_start]').val(this.startDate.format(this.format));
            this.container.find('input[name=daterangepicker_end]').val(this.endDate.format(this.format));

            if (this.startDate.isSame(this.endDate) || this.startDate.isBefore(this.endDate)) {
                this.container.find('button.applyBtn').removeAttr('disabled');
            } else {
                this.container.find('button.applyBtn').attr('disabled', 'disabled');
            }
        },

        updateFromControl: function () {
            if (!this.element.is('input')) return;
            if (!this.element.val().length) return;

            var dateString = this.element.val().split(this.separator);
            var start = moment(dateString[0], this.format);
            var end = moment(dateString[1], this.format);

            if (this.singleDatePicker) {
                start = moment(this.element.val(), this.format);
                end = start;
            }

            if (start == null || end == null) return;
            if (end.isBefore(start)) return;

            this.oldStartDate = this.startDate.clone();
            this.oldEndDate = this.endDate.clone();

            this.startDate = start;
            this.endDate = end;

            if (!this.startDate.isSame(this.oldStartDate) || !this.endDate.isSame(this.oldEndDate))
                this.notify();

            this.updateCalendars();
        },

        notify: function () {
            this.updateView();
            this.cb(this.startDate, this.endDate);
        },

        move: function () {
            var parentOffset = { top: 0, left: 0 };
            if (!this.parentEl.is('body')) {
                parentOffset = {
                    top: this.parentEl.offset().top - this.parentEl.scrollTop(),
                    left: this.parentEl.offset().left - this.parentEl.scrollLeft()
                };
            }
            
            if (this.opens == 'left') {
                this.container.css({
                    top: this.element.offset().top + this.element.outerHeight() - parentOffset.top,
                    right: $(window).width() - this.element.offset().left - this.element.outerWidth() - parentOffset.left,
                    left: 'auto'
                });
                if (this.container.offset().left < 0) {
                    this.container.css({
                        right: 'auto',
                        left: 9
                    });
                }
            } else {
                this.container.css({
                    top: this.element.offset().top + this.element.outerHeight() - parentOffset.top,
                    left: this.element.offset().left - parentOffset.left,
                    right: 'auto'
                });
                if (this.container.offset().left + this.container.outerWidth() > $(window).width()) {
                    this.container.css({
                        left: 'auto',
                        right: 0
                    });
                }
            }
        },

        show: function (e) {
            this.container.show();
            this.move();

            if (e) {
                e.stopPropagation();
                e.preventDefault();
            }

            $(document).on('mousedown', $.proxy(this.hide, this));
            this.element.trigger('show', this);
        },

        hide: function (e) {
            this.container.hide();

            if (!this.startDate.isSame(this.oldStartDate) || !this.endDate.isSame(this.oldEndDate))
                this.notify();

            this.oldStartDate = this.startDate.clone();
            this.oldEndDate = this.endDate.clone();

            $(document).off('mousedown', this.hide);
            this.element.trigger('hide', this);
        },

        enterRange: function (e) {
            var label = e.target.innerHTML;
            if (label == this.locale.customRangeLabel) {
                this.updateView();
            } else {
                var dates = this.ranges[label];
                this.container.find('input[name=daterangepicker_start]').val(dates[0].format(this.format));
                this.container.find('input[name=daterangepicker_end]').val(dates[1].format(this.format));
            }
        },

        showCalendars: function() {
            this.container.find('.calendar').show();
            this.move();
        },

        updateInputText: function() {
            if (this.element.is('input') && !this.singleDatePicker) {
                this.element.val(this.startDate.format(this.format) + this.separator + this.endDate.format(this.format));
            } else if (this.element.is('input')) {
                this.element.val(this.startDate.format(this.format));
            }

        },

        clickRange: function (e) {
            var label = e.target.innerHTML;
            if (label == this.locale.customRangeLabel) {
                this.showCalendars();
            } else {
                var dates = this.ranges[label];

                this.startDate = dates[0];
                this.endDate = dates[1];

                if (!this.timePicker) {
                    this.startDate.startOf('day');
                    this.endDate.startOf('day');
                }

                this.leftCalendar.month.month(this.startDate.month()).year(this.startDate.year()).hour(this.startDate.hour()).minute(this.startDate.minute());
                this.rightCalendar.month.month(this.endDate.month()).year(this.endDate.year()).hour(this.endDate.hour()).minute(this.endDate.minute());
                this.updateCalendars();

                this.updateInputText();

                this.container.find('.calendar').hide();
                this.hide();
                this.element.trigger('apply', this);
            }
        },

        clickPrev: function (e) {
            var cal = $(e.target).parents('.calendar');
            if (cal.hasClass('left')) {
                this.leftCalendar.month.subtract('month', 1);
            } else {
                this.rightCalendar.month.subtract('month', 1);
            }
            this.updateCalendars();
        },

        clickNext: function (e) {
            var cal = $(e.target).parents('.calendar');
            if (cal.hasClass('left')) {
                this.leftCalendar.month.add('month', 1);
            } else {
                this.rightCalendar.month.add('month', 1);
            }
            this.updateCalendars();
        },

        enterDate: function (e) {

            var title = $(e.target).attr('data-title');
            var row = title.substr(1, 1);
            var col = title.substr(3, 1);
            var cal = $(e.target).parents('.calendar');

            if (cal.hasClass('left')) {
                this.container.find('input[name=daterangepicker_start]').val(this.leftCalendar.calendar[row][col].format(this.format));
            } else {
                this.container.find('input[name=daterangepicker_end]').val(this.rightCalendar.calendar[row][col].format(this.format));
            }

        },

        clickDate: function (e) {
            var title = $(e.target).attr('data-title');
            var row = title.substr(1, 1);
            var col = title.substr(3, 1);
            var cal = $(e.target).parents('.calendar');

            if (cal.hasClass('left')) {
                var startDate = this.leftCalendar.calendar[row][col];
                var endDate = this.endDate;
                if (typeof this.dateLimit == 'object') {
                    var maxDate = moment(startDate).add(this.dateLimit).startOf('day');
                    if (endDate.isAfter(maxDate)) {
                        endDate = maxDate;
                    }
                }
            } else {
                var startDate = this.startDate;
                var endDate = this.rightCalendar.calendar[row][col];
                if (typeof this.dateLimit == 'object') {
                    var minDate = moment(endDate).subtract(this.dateLimit).startOf('day');
                    if (startDate.isBefore(minDate)) {
                        startDate = minDate;
                    }
                }
            }

            if (this.singleDatePicker && cal.hasClass('left')) {
                endDate = startDate;
            } else if (this.singleDatePicker && cal.hasClass('right')) {
                startDate = endDate;
            }

            cal.find('td').removeClass('active');

            if (startDate.isSame(endDate) || startDate.isBefore(endDate)) {
                $(e.target).addClass('active');
                this.startDate = startDate;
                this.endDate = endDate;
            } else if (startDate.isAfter(endDate)) {
                $(e.target).addClass('active');
                this.startDate = startDate;
                this.endDate = moment(startDate).add('day', 1).startOf('day');
            }

            this.leftCalendar.month.month(this.startDate.month()).year(this.startDate.year());
            this.rightCalendar.month.month(this.endDate.month()).year(this.endDate.year());
            this.updateCalendars();

            if (this.singleDatePicker)
                this.clickApply();
        },

        clickApply: function (e) {
            this.updateInputText();
            this.hide();
            this.element.trigger('apply', this);
        },

        clickCancel: function (e) {
            this.startDate = this.oldStartDate;
            this.endDate = this.oldEndDate;
            this.updateView();
            this.updateCalendars();
            this.hide();
            this.element.trigger('cancel', this);
        },

        updateMonthYear: function (e) {

            var isLeft = $(e.target).closest('.calendar').hasClass('left');
            var cal = this.container.find('.calendar.left');
            if (!isLeft)
                cal = this.container.find('.calendar.right');

            // Month must be Number for new moment versions
            var month = parseInt(cal.find('.monthselect').val(), 10);
            var year = cal.find('.yearselect').val();

            if (isLeft) {
                this.leftCalendar.month.month(month).year(year);
            } else {
                this.rightCalendar.month.month(month).year(year);
            }

            this.updateCalendars();

        },

        updateTime: function(e) {

            var isLeft = $(e.target).closest('.calendar').hasClass('left');
            var cal = this.container.find('.calendar.left');
            if (!isLeft)
                cal = this.container.find('.calendar.right');

            var hour = parseInt(cal.find('.hourselect').val());
            var minute = parseInt(cal.find('.minuteselect').val());

            if (this.timePicker12Hour) {
                var ampm = cal.find('.ampmselect').val();
                if (ampm == 'PM' && hour < 12)
                    hour += 12;
                if (ampm == 'AM' && hour == 12)
                    hour = 0;
            }

            if (isLeft) {
                var start = this.startDate.clone();
                start.hour(hour);
                start.minute(minute);
                this.startDate = start;
                this.leftCalendar.month.hour(hour).minute(minute);
            } else {
                var end = this.endDate.clone();
                end.hour(hour);
                end.minute(minute);
                this.endDate = end;
                this.rightCalendar.month.hour(hour).minute(minute);
            }

            this.updateCalendars();

        },

        updateCalendars: function () {
            this.leftCalendar.calendar = this.buildCalendar(this.leftCalendar.month.month(), this.leftCalendar.month.year(), this.leftCalendar.month.hour(), this.leftCalendar.month.minute(), 'left');
            this.rightCalendar.calendar = this.buildCalendar(this.rightCalendar.month.month(), this.rightCalendar.month.year(), this.rightCalendar.month.hour(), this.rightCalendar.month.minute(), 'right');
            this.container.find('.calendar.left').html(this.renderCalendar(this.leftCalendar.calendar, this.startDate, this.minDate, this.maxDate));
            this.container.find('.calendar.right').html(this.renderCalendar(this.rightCalendar.calendar, this.endDate, this.startDate, this.maxDate));

            this.container.find('.ranges li').removeClass('active');
            var customRange = true;
            var i = 0;
            for (var range in this.ranges) {
                if (this.timePicker) {
                    if (this.startDate.isSame(this.ranges[range][0]) && this.endDate.isSame(this.ranges[range][1])) {
                        customRange = false;
                        this.container.find('.ranges li:eq(' + i + ')').addClass('active');
                    }
                } else {
                    //ignore times when comparing dates if time picker is not enabled
                    if (this.startDate.format('YYYY-MM-DD') == this.ranges[range][0].format('YYYY-MM-DD') && this.endDate.format('YYYY-MM-DD') == this.ranges[range][1].format('YYYY-MM-DD')) {
                        customRange = false;
                        this.container.find('.ranges li:eq(' + i + ')').addClass('active');
                    }
                }
                i++;
            }
            if (customRange)
                this.container.find('.ranges li:last').addClass('active');
        },

        buildCalendar: function (month, year, hour, minute, side) {

            var firstDay = moment([year, month, 1]);
            var lastMonth = moment(firstDay).subtract('month', 1).month();
            var lastYear = moment(firstDay).subtract('month', 1).year();

            var daysInLastMonth = moment([lastYear, lastMonth]).daysInMonth();

            var dayOfWeek = firstDay.day();

            //initialize a 6 rows x 7 columns array for the calendar
            var calendar = [];
            for (var i = 0; i < 6; i++) {
                calendar[i] = [];
            }

            //populate the calendar with date objects
            var startDay = daysInLastMonth - dayOfWeek + this.locale.firstDay + 1;
            if (startDay > daysInLastMonth)
                startDay -= 7;

            if (dayOfWeek == this.locale.firstDay)
                startDay = daysInLastMonth - 6;

            var curDate = moment([lastYear, lastMonth, startDay, 12, minute]);
            for (var i = 0, col = 0, row = 0; i < 42; i++, col++, curDate = moment(curDate).add('hour', 24)) {
                if (i > 0 && col % 7 == 0) {
                    col = 0;
                    row++;
                }
                calendar[row][col] = curDate.clone().hour(hour);
                curDate.hour(12);
            }

            return calendar;

        },

        renderDropdowns: function (selected, minDate, maxDate) {
            var currentMonth = selected.month();
            var monthHtml = '<select class="monthselect">';
            var inMinYear = false;
            var inMaxYear = false;

            for (var m = 0; m < 12; m++) {
                if ((!inMinYear || m >= minDate.month()) && (!inMaxYear || m <= maxDate.month())) {
                    monthHtml += "<option value='" + m + "'" +
                        (m === currentMonth ? " selected='selected'" : "") +
                        ">" + this.locale.monthNames[m] + "</option>";
                }
            }
            monthHtml += "</select>";

            var currentYear = selected.year();
            var maxYear = (maxDate && maxDate.year()) || (currentYear + 5);
            var minYear = (minDate && minDate.year()) || (currentYear - 50);
            var yearHtml = '<select class="yearselect">';

            for (var y = minYear; y <= maxYear; y++) {
                yearHtml += '<option value="' + y + '"' +
                    (y === currentYear ? ' selected="selected"' : '') +
                    '>' + y + '</option>';
            }

            yearHtml += '</select>';

            return monthHtml + yearHtml;
        },

        renderCalendar: function (calendar, selected, minDate, maxDate) {

            var html = '<div class="calendar-date">';
            html += '<table class="table-condensed">';
            html += '<thead>';
            html += '<tr>';

            // add empty cell for week number
            if (this.showWeekNumbers)
                html += '<th></th>';

            if (!minDate || minDate.isBefore(calendar[1][1])) {
                html += '<th class="prev available"><i class="fa fa-arrow-left icon-arrow-left glyphicon glyphicon-arrow-left"></i></th>';
            } else {
                html += '<th></th>';
            }

            var dateHtml = this.locale.monthNames[calendar[1][1].month()] + calendar[1][1].format(" YYYY");

            if (this.showDropdowns) {
                dateHtml = this.renderDropdowns(calendar[1][1], minDate, maxDate);
            }

            html += '<th colspan="5" class="month">' + dateHtml + '</th>';
            if (!maxDate || maxDate.isAfter(calendar[1][1])) {
                html += '<th class="next available"><i class="fa fa-arrow-right icon-arrow-right glyphicon glyphicon-arrow-right"></i></th>';
            } else {
                html += '<th></th>';
            }

            html += '</tr>';
            html += '<tr>';

            // add week number label
            if (this.showWeekNumbers)
                html += '<th class="week">' + this.locale.weekLabel + '</th>';

            $.each(this.locale.daysOfWeek, function (index, dayOfWeek) {
                html += '<th>' + dayOfWeek + '</th>';
            });

            html += '</tr>';
            html += '</thead>';
            html += '<tbody>';

            for (var row = 0; row < 6; row++) {
                html += '<tr>';

                // add week number
                if (this.showWeekNumbers)
                    html += '<td class="week">' + calendar[row][0].week() + '</td>';

                for (var col = 0; col < 7; col++) {
                    var cname = 'available ';
                    cname += (calendar[row][col].month() == calendar[1][1].month()) ? '' : 'off';

                    if ((minDate && calendar[row][col].isBefore(minDate)) || (maxDate && calendar[row][col].isAfter(maxDate))) {
                        cname = ' off disabled ';
                    } else if (calendar[row][col].format('YYYY-MM-DD') == selected.format('YYYY-MM-DD')) {
                        cname += ' active ';
                        if (calendar[row][col].format('YYYY-MM-DD') == this.startDate.format('YYYY-MM-DD')) {
                            cname += ' start-date ';
                        }
                        if (calendar[row][col].format('YYYY-MM-DD') == this.endDate.format('YYYY-MM-DD')) {
                            cname += ' end-date ';
                        }
                    } else if (calendar[row][col] >= this.startDate && calendar[row][col] <= this.endDate) {
                        cname += ' in-range ';
                        if (calendar[row][col].isSame(this.startDate)) { cname += ' start-date '; }
                        if (calendar[row][col].isSame(this.endDate)) { cname += ' end-date '; }
                    }

                    var title = 'r' + row + 'c' + col;
                    html += '<td class="' + cname.replace(/\s+/g, ' ').replace(/^\s?(.*?)\s?$/, '$1') + '" data-title="' + title + '">' + calendar[row][col].date() + '</td>';
                }
                html += '</tr>';
            }

            html += '</tbody>';
            html += '</table>';
            html += '</div>';

            if (this.timePicker) {

                html += '<div class="calendar-time">';
                html += '<select class="hourselect">';
                var start = 0;
                var end = 23;
                var selected_hour = selected.hour();
                if (this.timePicker12Hour) {
                    start = 1;
                    end = 12;
                    if (selected_hour >= 12)
                        selected_hour -= 12;
                    if (selected_hour == 0)
                        selected_hour = 12;
                }

                for (var i = start; i <= end; i++) {
                    if (i == selected_hour) {
                        html += '<option value="' + i + '" selected="selected">' + i + '</option>';
                    } else {
                        html += '<option value="' + i + '">' + i + '</option>';
                    }
                }

                html += '</select> : ';

                html += '<select class="minuteselect">';

                for (var i = 0; i < 60; i += this.timePickerIncrement) {
                    var num = i;
                    if (num < 10)
                        num = '0' + num;
                    if (i == selected.minute()) {
                        html += '<option value="' + i + '" selected="selected">' + num + '</option>';
                    } else {
                        html += '<option value="' + i + '">' + num + '</option>';
                    }
                }

                html += '</select> ';

                if (this.timePicker12Hour) {
                    html += '<select class="ampmselect">';
                    if (selected.hour() >= 12) {
                        html += '<option value="AM">AM</option><option value="PM" selected="selected">PM</option>';
                    } else {
                        html += '<option value="AM" selected="selected">AM</option><option value="PM">PM</option>';
                    }
                    html += '</select>';
                }

                html += '</div>';

            }

            return html;

        },

        remove: function() {

            this.container.remove();
            this.element.off('.daterangepicker');
            this.element.removeData('daterangepicker');

        }

    };

    $.fn.daterangepicker = function (options, cb) {
        this.each(function () {
            var el = $(this);
            if (el.data('daterangepicker'))
                el.data('daterangepicker').remove();
            el.data('daterangepicker', new DateRangePicker(el, options, cb));
        });
        return this;
    };

}(window.jQuery);
if (typeof $.monstra == 'undefined') $.monstra = {};

function glibOnloadHandle(){$.monstra.ganalytics.libOnloadHandle();}

$.monstra.ganalytics = {

    conf: {
        clientId: '',
        apiKey: '',
        viewId: '',
        authScopes: 'https://www.googleapis.com/auth/analytics.readonly'
    },

    _gaAreas: '#authOk,#authFail,#gaSettings,#gaLoading,#reauthError,#gaHelpLink',
    _startDate: moment().subtract('days', 29),
    _endDate: moment(),
    
    init: function(data){
        $.extend(this.conf, data);
        $('.gaSettingsLink').click(function(){
            $.monstra.ganalytics.show('#gaSettings,#gaHelpLink');
			$('.gaSettingsLink').hide();
        });
    },
    
    initDateRangePicker: function(){
        $('#reportRange').daterangepicker({
              ranges: {
                 'Today': [moment(), moment()],
                 'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                 'Last 7 Days': [moment().subtract('days', 6), moment()],
                 'Last 30 Days': [moment().subtract('days', 29), moment()],
                 'This Month': [moment().startOf('month'), moment().endOf('month')],
                 'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
              },
              startDate: $.monstra.ganalytics._startDate,
              endDate: $.monstra.ganalytics._endDate
            },function(start, end) {
                $.monstra.ganalytics.getAnalyticsInfo(start._d, end._d);
            }
        );
        $.monstra.ganalytics.getAnalyticsInfo($.monstra.ganalytics._startDate._d, $.monstra.ganalytics._endDate._d);
    },
    
    libOnloadHandle: function(){
        if ($.monstra.ganalytics.conf.clientId == '' 
            || $.monstra.ganalytics.conf.apiKey == '' 
            || $.monstra.ganalytics.conf.viewId == ''
        ) {
            $.monstra.ganalytics.show('#gaSettings,#gaHelpLink');
			$('.gaSettingsLink').hide();
            return false;
        }
        gapi.client.setApiKey(this.conf.apiKey);
        window.setTimeout(function(){
            $.monstra.ganalytics.checkAuth(true);
        },1);
    },

    checkAuth: function(immediate){
        gapi.auth.authorize({
            client_id: $.monstra.ganalytics.conf.clientId,
            scope: $.monstra.ganalytics.conf.authScopes,
            immediate: immediate
        }, $.monstra.ganalytics.handleAuthResult);
        return immediate;
    },

    handleAuthResult: function(authResult){
        if (authResult && !authResult.error) {
            $.monstra.ganalytics.show('#authOk');
            $.monstra.ganalytics.initDateRangePicker();
        } else {
            $.monstra.ganalytics.show('#authFail');
            if (authResult && typeof authResult.error != 'undefined') {
                $.monstra.ganalytics.showError(authResult.error.message);
            }
            
            $('#authorizeButton').on('click', function(e){
                $.monstra.ganalytics.checkAuth(false);
            });
        }
    },

    getAnalyticsInfo: function(startDate, endDate) {
        gapi.client.load('analytics', 'v3', function(){
            gapi.client.analytics.data.ga.get({
                'ids': 'ga:'+ $.monstra.ganalytics.conf.viewId,
                'start-date': $.monstra.ganalytics.formatDate(startDate),
                'end-date': $.monstra.ganalytics.formatDate(endDate),
                'metrics': 'ga:visits,ga:pageviews,ga:visitors',
                'dimensions': 'ga:date'
            }).execute($.monstra.ganalytics.gaReportingResults);
        });
    },

    gaReportingResults: function(res){
        if (typeof res.error != 'undefined' && typeof res.error.message != 'undefined') {
            $.monstra.ganalytics.showError(res.error.message, res.error.code);
            return;
        }
        
        // build chart data
        var dataArr = [['Date', 'Visits']];
        for (r in res.rows) {
            var tmpr = [];
            for (h in res.columnHeaders) {
                if (res.columnHeaders[h].name == 'ga:visits') {
                    tmpr[1] = parseInt(res.rows[r][h]);
                } else if (res.columnHeaders[h].name == 'ga:date') {
                    var parsed = res.rows[r][h].match(/([0-9]{4})([0-9]{2})([0-9]{2})/)
                    tmpr[0] = parsed[1] +'-'+ parsed[2] +'-'+ parsed[3];
                }
                
                if (res.rows.length == (parseInt(r)+1)) {
                    switch(res.columnHeaders[h].name) {
                        case 'ga:visits': $.monstra.ganalytics.setVisits(res.rows[r][h]); break;
                        case 'ga:pageviews': $.monstra.ganalytics.setPageviews(res.rows[r][h]); break;
                        case 'ga:visitors': $.monstra.ganalytics.setVisitors(res.rows[r][h]); break;
                    }
                }
            }
            dataArr.push(tmpr);
        }
        
        var data = google.visualization.arrayToDataTable(dataArr);

        var options = {
          title: 'Visits',
          hAxis: {title: 'Date',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('gaChart'));
        chart.draw(data, options);
        
    },

    formatDate: function(dateObj){
        var m = dateObj.getMonth()+1;
        var d = dateObj.getDate();
        m = m > 9 ? m : '0'+m;
        d = d > 9 ? d : '0'+d;
        return dateObj.getFullYear() +'-'+ m +'-'+ d;
    },

    show: function(selector){
		$('.gaSettingsLink').show();
        $('#gaAlerts').html('');
        $($.monstra.ganalytics._gaAreas).addClass('hide');
        $(selector).removeClass('hide').show();
    },

    showError: function(msg, errCode){
		if (typeof errCode !== 'undefined' && errCode == 403) {
			$.monstra.ganalytics.show('#reauthError,#gaHelpLink');
		} else {
			$.monstra.ganalytics.show('#gaHelpLink');
		}
        $('#gaAlerts').html(msg);
		$('#authOk').addClass('hide');
    },
    
    setVisits: function(val){
        $('#gaVisits').html(val);
    },
    
    setVisitors: function(val){
        $('#gaVisitors').html(val);
    },
    
    setPageviews: function(val){
        $('#gaPageviews').html(val);
    }
};

$(document).ready(function(){
    $val_gaInitData = $('#gaInitData').val();
    if ($val_gaInitData !== undefined) {
        $.monstra.ganalytics.init($.parseJSON($val_gaInitData));
    }
});


