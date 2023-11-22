
<html>
 <head>
    <title>Webex Widget Demo</title>
    <link href="https://cdn.jsdelivr.net/gh/WXSD-Sales/embeddable-meetings-widget/docs/webex-widgets.css" />
    <script src="https://cdn.jsdelivr.net/gh/WXSD-Sales/embeddable-meetings-widget/docs/bundle.js"></script>
 </head>
 <body>
    <div id="embeddable-meetings-widget"></div>
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const token = urlParams.get("token");
        
        webexMeetingsWidget({accessToken: "<?php echo $token; ?>",
        meetingDestination: "https://meet351.webex.com/meet/pr26402554525",
        theme:"dark",
        draggable:"true",
        width:"",
        height:"",
        layout:"Grid",
        inMeetingControls:['mute-audio','mute-video','share-screen','member-roster','settings','leave-meeting'],
        interstitialControls:['mute-audio','mute-video','settings','join-meeting']});
    </script>
 </body>
 </html>


