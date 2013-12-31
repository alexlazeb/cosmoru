/**
 * jqscale.js v0.1.1
 * jQuery dom-element scaling Plugin - released under MIT License 
 * Author: Toni Wagner <i@itsatony.com>
 * https://github.com/itsatony/jqScale
 * Copyright (c) 2012-2013 ViSERiON UG haftungsbeschraenkt {{{
 *
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 *
 * }}}
 *
 * examples / demo:

* getting the scale of ONE element

   ``jQuery('#myDomElement').jqscale();``

    this will return     [ 1, 1 ];     (scale for x-axis, scale for y-axis)


* getting the 'TRUE' scale of an element (meaning the element's scale multiplied with all its parents' scales!)

    ``jQuery('#myDomElement').jqscale(true);``

* setting the scale for an element:

    ``jQuery('#myDomElement').jqscale(0.5);``

* setting different scale values for x and y axis:

    ``jQuery('#myDomElement').jqscale(0.5, 0.7);``

 *
 *
 *
 * 
 */
 
 (function($) {
	$.fn.jqscale = function(option, independentScaleY) {
		var thisScaler = this;
		var action = 'getScale';
		if (typeof option === 'number') {
			action = 'setScale';
			var scaleX = option;
			var scaleY = (typeof independentScaleY === 'number') ? independentScaleY : option;
		} else if (typeof option === 'boolean' && option === true)  {
			action = 'calculateScale'
		}
		$.fn.jqScale.setScale = function(element) {
			var matrix = $.fn.jqScale.getElementTransformMatrix(element);
			matrix[0] = scaleX;
			matrix[3] = scaleY;
			$(element).css('transform-origin', '0 0');
			$(element).css('transform', 'matrix(' + matrix.toString(',') + ')');
			$(element).attr('data-jqscale', scaleX + ',' + scaleY);
		};
		$.fn.jqScale.getScale = function(element) {	
			var matrix = $.fn.jqScale.getElementTransformMatrix(element);
			$(element).attr('data-jqscale', matrix[0] + ',' + matrix[3]);
			return [ matrix[0], matrix[3] ];
		};
		$.fn.jqScale.calculateScale = function(element) {
			var parents = $(element).parents();
			var parentCount = parents.length;
			var parentScales = [];
			var aggregatedScaleX = 1;
			var aggregatedScaleY = 1;
			var elementScales = $.fn.jqScale.getScale(element);
			parentScales.push(elementScales);
			aggregatedScaleX = aggregatedScaleX * elementScales[0];
			aggregatedScaleY = aggregatedScaleX * elementScales[1];
			for (var i = 0; i < parentCount; i++) {
				var elementScales = $.fn.jqScale.getScale(parents[i]);
				parentScales.push(elementScales);
				aggregatedScaleX = aggregatedScaleX * elementScales[0];
				aggregatedScaleY = aggregatedScaleX * elementScales[1];
			}
			$(element).attr('data-aggregated-jqscale', aggregatedScaleX + ',' + aggregatedScaleY);
			return [ aggregatedScaleX, aggregatedScaleY ];
		};		
		$.fn.jqScale.getElementTransformMatrix = function(element) {
			var matrixArray = [];
			var matrixStrings = $(element).css('transform');
			if (matrixStrings === null) {
				var matrixStrings = $(element).css('-webkit-transform');
			}
			if (typeof matrixStrings === 'undefined' || matrixStrings === null || matrixStrings.indexOf('matrix') !== 0) {
				return [1,0,0,1,0,0];
			}
			matrixStrings = matrixStrings.split('(')[1].split(')')[0].split(',');
			var matrixStringCount= matrixStrings.length;
			for (var i=0; i < matrixStringCount; i++) {
				var value = ( isNaN(Number(matrixStrings[i])) ) ? 0 : Number(matrixStrings[i]);
				matrixArray.push(value);
			}
			return matrixArray;
		};
		return this.each(
			function() {
				var result = $.fn.jqScale[action](this);
				return result;
			}
		);
	};
})(jQuery);