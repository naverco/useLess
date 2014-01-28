modx-UseLess
============

Less snippet for MODx Evolution based on the lessphp ( http://leafo.net/lessphp ).

Call the less compiler directly in MODx:

[!useLess? &lessString=`{{AllYourLessCode}}` &lessCompress=`yes` !]


Installation
============

1. Create a folder "useLess" in the "snippets" folder.

2. Copy lessc.inc.php to the useLess folder.

3. In the MODx back-end, create a new snippet:

   Snippet name = useLess

   Description = <b>0.5</b> use Less with MODx Evolution.

   Copy the content of snippet.useless.php in the snippet code area.


