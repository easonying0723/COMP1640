// $('#myList a').on('click', function (e) {
//    e.preventDefault()
//    $(this).tab('show')
//  })

/**
 * like-dislike.js jQuery plugin
 * Copyright 2016, Maxim Tkachuk, mxtkachuk@gmail.com
 * Licensed under the MIT license
 */

 $('#demo').likeDislike({
   reverseMode: true,
    disabledClass: 'disable',
    click: function (value, btnType, event) {
        var likes = $(this).find('#likes');
        var dislikes = $(this).find('#dislikes');
        value === 1 ? likes.text('1') : likes.text('0');
        value === -1 ? dislikes.text('1') : dislikes.text('0');
    }
});