<?php echo "<!DOCTYPE html>\n";
echo "<html>\n";
echo "\n";
echo "<head>\n";
echo "    <meta charset=\"utf-8\">\n";
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">\n";
echo "    <title>Nooder Appeals</title>\n";
echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.2/slate/bootstrap.min.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"/assets/css/Contact-Form-Clean.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"/assets/css/styles.css\">\n";
echo "</head>\n";
echo "\n";
echo "<body>\n";
echo "    <h1 class=\"text-center\" style=\"border-bottom-style: solid;\">Nooder Appeals</h1>\n";
echo "    <div class=\"contact-clean\" style=\"background: transparent;\" align=\"center\">\n";
echo "      <div id=\"spam-warning\" class=\"alert alert-warning\" role=\"alert\" style=\"width: 420px\" align=\"center\"><span align=\"center\"><strong align=\"center\">Do NOT Spam with requests! Our appeals team cannot take on too many requests or even any requests all day long, please be patient, we will get back to you. Failure to accept these terms WILL result in your computer being blacklisted from appealing.</strong><br></span></div>";
echo "        <form method=\"post\">\n";
echo "            <h2 class=\"text-center\">Appeal Form</h2>\n";
echo "            <div class=\"form-group\"><input class=\"form-control\" type=\"text\" id=\"discID\" name=\"discID\" placeholder=\"Discord ID (ex. 0000000000000)\"></div><input class=\"form-control\" type=\"text\" id=\"discUN\" placeholder=\"Discord Username (ex. Wumpus#0000)\" name=\"discUN\" pattern=\"/[[:alpha:]]+#+[0-9]{4}\"\n";
echo "                required=\"\" minlength=\"0\" maxlength=\"16\">\n";
echo "            <div class=\"form-group\"><textarea class=\"form-control\" id=\"banPunish\" name=\"punishmentReason\" placeholder=\"Reason For Being Punished\" rows=\"14\"></textarea></div><input class=\"form-control\" type=\"text\" id=\"PunishBy\" name=\"punBy\" placeholder=\"Punished By (ex. Moderator#0001)\"><strong>Attachments&nbsp;</strong>\n";
echo "            <input\n";
echo "                type=\"file\" title=\"Addittional Attachments\" style=\"width: 194px;margin-top: 10px;\" disabled=\"\">\n";
echo "                <div class=\"form-group\"><a class=\"btn btn-primary\" role=\"button\" onclick=\"postapi()\">GENERATE MY APPEAL</a></div>\n";
echo "                <div id=\"done\" class=\"alert alert-success\" role=\"alert\" hidden><span><strong>Your Application Has Been Recieved!</strong><br /></span></div>\n";
echo "        </form>\n";
echo "    </div>\n";
echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>\n";
echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js\"></script>\n";
echo "    <script src=\"/assets/js/post.js\"></script>\n";
echo "</body>\n";
echo "\n";
echo "</html>"; ?>