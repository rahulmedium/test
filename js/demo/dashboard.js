$(function() {
    $('#btn-chat').click(function() {
        var conversation = $('#chat .tab-pane.active .chat')
        var message = $('#input-chat').val();

        if (message != '')
            var messagehtml = '<li class="left clearfix">'
                    + '<span class="chat-img pull-left">'
                    + '<img src="img/profile-1.jpg" alt="User Avatar" class="img-circle  margin-right" />'
                    + '</span>'
                    + '<div class="chat-body clearfix">'
                    + '<div class="header">'
                    + '<strong class="primary-font">John Doe</strong> '
                    + '<small class="pull-right text-muted">'
                    + '<i class="fa fa-clock-o fa-fw"></i> just now'
                    + '</small>'
                    + '</div>'
                    + '<p>'
                    + message
                    + '</p>'
                    + '</div>'
                    + '</li>';

        conversation.append(messagehtml);
    })

    $('body').on('click', '.close-conversation', function() {
        var $parent = $(this).parent();
        var chat = $parent.attr('href');
        var $chat = $(chat);
        var reset = false;

        if ($chat.hasClass('active'))
            reset = true

        $parent.parent().remove();
        $chat.remove();

        if (reset) {
            $('#chat-head li').eq(0).addClass('active');
            $('#chat .tab-pane').eq(0).addClass('active');
        }
    })
});


$(window).load(function() {
    if (jQuery().masonry) {
        $('.post-social-wrapper').masonry({
            itemSelector: '.post-social-item',
            columnWidth: ".col-md-4",
            gutter: 0
        });
    }
});

$(window).resize(function() {
    if (jQuery().masonry) {
        $('.post-social-wrapper').masonry('layout')
    }
})
