<? if ( Mail("effenbergerova94@centrum.cz", $predmet, $zprava, "From: " . $mail_odesilatele) )
echo "Mail byl odeslán";
else echo "Mail se nepodařilo odeslat"; ?>
