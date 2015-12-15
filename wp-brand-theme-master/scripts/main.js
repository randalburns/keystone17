(function($) {
    $(function () {

        var $page_nav = $('.interior .page-nav'),
            $site_content = $('.interior .site-content');

        $(document).foundation();

        // Interior sticky header
        $('.interior .entry-header').waypoint('sticky').on('click', '.menu-toggle', function (){
            $.scrollTo(0);
        });
        $site_content.waypoint({
            offset: 'bottom-in-view',
            handler: function (dir) {
                $page_nav.toggleClass('stuck');
            }
        })
        $page_nav.waypoint('sticky', {
            offset: 140,
        }).localScroll({
            hash: true,
            offset: -140
        });

        // $('.interior .guideline-item').waypoint({
        //     handler: function (direction) {
        //         var id = this.id,
        //             hash = '#' + id,
        //             $nav = $('.page-nav');

        //         $nav
        //             .find('a')
        //                 .removeClass('active')
        //                 .end()
        //             .find('[href="' + hash + '"]').addClass('active');

        //     }
        // },{
        //     offset: 122
        // });

        // Display example images in lightbox
        $('.example-lightbox').fancybox({
            helpers : {
                overlay : {
                    css : {
                        'background' : 'rgba(44, 44, 51, 0.9)'
                    }
                },
                title: {
                    type: 'outside'
                }
            }
        });


        // Load Logo Choice Modal
        $('[href="#logos"]').fancybox({
            maxWidth    : 600,
            maxHeight   : 600,
            fitToView   : true,
            width       : '70%',
            height      : '70%',
            autoSize    : false,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none',
            afterShow   : function () {
                var $logos  = $('#logos'),
                    $images = $logos.find('img'),
                    $links  = $logos.find('a');
                // console.log($images);

                $logos.on('mouseover', 'a', function (e) {
                    var data = $(this).data();

                    e.preventDefault();
                    // console.log(data);
                    $images.removeClass('active');
                    $logos.find('img.' + data.preview).addClass('active');
                });
            }
        });


        // Logo Choice Preview



        // Quadon Typetester
        $('#type-quadon').typeshow({
            "folder" : "/ts",
            "fonts"  : [{"name":"Quadon","designer":"Rene Bieder","foundry":"Rene Bieder","url":"http:\/\/www.renebieder.com","hasLigatures":"N","styles":[{"fontfile":"Quadon-Regular.ttf","name":"Regular"},{"fontfile":"Quadon-Bold.ttf","name":"Regular"}]}],
            "panagrams" : [{"text": "JHU"}]
        });

        // Gentona Typetester
        $("#type-gentona").typeshow({
            "folder" : "/ts",
            "fonts"  : [{"name":"Gentona","designer":"Rene Bieder","foundry":"Rene Bieder","url":"http://www.renebieder.com","hasLigatures":"N","styles":[{"fontfile":"Gentona-Bold.ttf","name":"Bold"},{"fontfile":"Gentona-Book.ttf","name":"Book"}]}],
            "panagrams" : [{"text": "JHU"}]
        });

        // Quadon Typetester
        $('#type-arnhem').typeshow({
            "folder" : "/ts",
            "fonts"  : [{"name":"Arnhem","designer":"Fred Smeijers","foundry":"OurType","url":"","hasLigatures":"N","styles":[{"fontfile":"Arnhem-Blond.ttf","name":"Regular"}]}],
            "panagrams" : [{"text": "JHU"}]
        });

        // Gentona Typetester
        $("#type-titling").typeshow({
            "folder" : "/ts",
            "fonts"  : [{"name":"Titling Gothic","designer":"David Berlow","foundry":"The Font Bureau","url":"","hasLigatures":"N","styles":[{"fontfile":"Titling-Gothic-Regular.ttf","name":"Regular"}]}],
            "panagrams" : [{"text": "JHU"}]
        });


        // Download logo links
        $(".logos-links a").on('click', function (e) {
          ga("send", "event", "Identity", "Logo Download", $(this).data("preview"));
        });

    });
})(jQuery);
