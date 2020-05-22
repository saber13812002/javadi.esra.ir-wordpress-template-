/**
 * Created by MalekSabet on 12/1/2015.
 */

(function ($) {
    $(document).ready(function () {
        $('.aui-w10').each(function () {
            $('.aui-w10').addClass('col-sm-1 col-xs-12 no-margin').removeClass('aui-w10');
        });
        $('.aui-w20').each(function () {
            $('.aui-w20').addClass('col-sm-2 col-xs-12 no-margin').removeClass('aui-w20');
        });
        $('.aui-w25').each(function () {
            $('.aui-w25').addClass('col-sm-3 col-xs-12 no-margin').removeClass('aui-w25');
        });
        $('.aui-w30').each(function () {
            $('.aui-w30').addClass('col-md-3 col-sm-4 col-xs-12 no-margin').removeClass('aui-w30');
        });
        $('.aui-w33').each(function () {
            $('.aui-w33').addClass('col-sm-4 col-xs-12 no-margin').removeClass('aui-w33');
        });
        $('.aui-w40').each(function () {
            $('.aui-w40').addClass('col-sm-5 col-xs-12 no-margin').removeClass('aui-w40');
        });
        $('.aui-w45').each(function () {
            $('.aui-w45').addClass('col-sm-5 col-xs-12 no-margin').removeClass('aui-w45');
        });
        $('.aui-w50').each(function () {
            $('.aui-w50').addClass('col-sm-6 col-xs-12 no-margin').removeClass('aui-w50');
        });
        $('.aui-w60').each(function () {
            $('.aui-w60').addClass('col-sm-7 col-xs-12 no-margin').removeClass('aui-w60');
        });
        $('.aui-w70').each(function () {
            $('.aui-w70').addClass('col-md-9 col-sm-8 col-xs-12 no-margin').removeClass('aui-w70');
        });
        $('.aui-w75').each(function () {
            $('.aui-w75').addClass('col-sm-9 col-xs-12 no-margin').removeClass('aui-w75');
        });
        $('.aui-w80').each(function () {
            $('.aui-w80').addClass('col-sm-10 col-xs-12 no-margin').removeClass('aui-w80');
        });
        $('.aui-w90').each(function () {
            $('.aui-w90').addClass('col-sm-11 col-xs-12 no-margin').removeClass('aui-w90');
        });
        $('.aui-w100').each(function () {
            $('.aui-w100').addClass('col-sm-12 col-xs-12 no-margin').removeClass('aui-w100');
        });


        $('.portlet-site-map .portlet-body > ul').each(function () {
            $('.portlet-site-map .portlet-body > ul').addClass('esra-customized-site-map');
        });

        $('.esra-customized-site-map li ul').each(function (counter) {
            $(this).attr("ID", "child-page-" + (counter + 1)).addClass('collapse');
        });

        $('.esra-customized-site-map li:has(ul)').each(function (index){
            $(this).addClass('have-child');
            $(this).prepend('<a></a>');
            $(this).children("a:first-child").addClass(index)
                .attr("href", "#")
                .attr("data-toggle", "collapse")
                .attr("data-target", '#' + $(this).children("ul:first").attr('id'));
        });


        //$('.esra-customized-site-map li.have-child > a').each(function () {
        //    $(this).attr("data-toggle", "collapse").attr("data-target", "#child-page-3");
        //});


        //
        //$('.esra-customized-site-map li.have-child').each(function (index) {
        //    $('.esra-customized-site-map li.have-child > ul').attr("ID", "child-page-" + index);
        //    console.log( index + ": " + $( this ).text() );
        //});
    });
})(jQuery); // End of use strict
