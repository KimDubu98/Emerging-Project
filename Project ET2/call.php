<!DOCTYPE html>
<html>

<head>
   <meta charset="utf8">

   <title>Space Widget</title>
   <link rel="stylesheet" href="https://code.s4d.io/widget-space/production/main.css">

   <script src="https://code.s4d.io/widget-space/production/bundle.js"></script>
</head>

<body style="background-color: cyan">

   <div id="space" class="webexteams-widget" style="width: 600px; height: 600px; padding-left:30%;"
      data-access-token="PASTE_YOUR_WEBEX_TEAMS_ACCESS_TOKEN" data-toggle="webex-space" data-destination-type="spaceId"
      data-destination-id="" data-initial-activity="meet" />

   <script>
      // Update token if set as a query parameter

      const urlParams = new URLSearchParams(window.location.search);
      const token = urlParams.get("token");
      const destination = urlParams.get("destination");

      if (token) {
         console.log("injecting token from query parameter...")
         const widget = document.getElementById("space");
         widget.setAttribute("data-access-token", token);
      }
      if (token) {
         console.log("injecting token from query parameter...")
         const widget = document.getElementById("space");
         widget.setAttribute("data-destination-id", destination);
      }
   </script>

</body>

</html>