<? include("header.html"); ?>


			<div id="content">
			  <br>	
			  <div id="entry">
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
                version: 2,
                type: 'search',
                search: '@medialabae',
                interval: 30000,
                title: 'Now',
                subject: 'live',
                width: 'auto',
                height: 500,
                theme: {
                shell: {
                background: '#b8b8b8',
                color: '#ffffff'
                },
                tweets: {
                background: '#ffffff',
                color: '#444444',
                links: '#00ab03'
                }
                },
                features: {
                scrollbar: true,
                loop: false,
                live: true,
                hashtags: true,
                timestamp: true,
                avatars: true,
                toptweets: true,
                behavior: 'all'
                }
                }).render().start();
</script>
<? include("footer.html"); ?>                                
