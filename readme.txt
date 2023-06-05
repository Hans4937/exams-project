****************************
**        READ ME         **
** How to import and open **
**    the exams project   **
****************************
             __.-/|
             \`o_O'
              =( )=  +------+
                U|   | HELP |
      /\  /\   / |   +------+
     ) /^\) ^\/ _)\     |
     )   /^\/   _) \    |
     )   _ /  / _)  \___|_
 /\  )/\/ ||  | )_)\___,|))
<  >      |(,,) )__)    |
 ||      /    \)___)\
 | \____(      )___) )____
  \______(_______;;;)__;;;)


******************************
**    Intructions below     **
******************************

---------------------------------------------------------------------------------------------------------------------------------  
  ----------------------------------------------------------
 | Download MAMP from: https://www.mamp.info/en/downloads/  |
  ---------------------------------------------------------- 
  How to install MAMP:
  1. Download MAMP from mamp.info
  2. Select the version that fits your computer
  3. Run the installer

  4. DO NOT SELECT THE PRO VERSION

  5. Finished - onto the next section

---------------------------------------------------------------------------------------------------------------------------------

  How to setup the database:

  1. Download the project .zip and extract it with 7zip or winrar.

  2. Open MAMP, go to mamp in the top left corner and select preferences.

  3. Make sure your ports is just like below:
  
        WINDOWS:     |         MacOS:
    Apache : 8888    |   Apache : 8888
    MySQL  : 3306    |   MySQL  : 8889
  
  4. Click ok and start the server.

  5. This should open the website: "http://localhost:8888/MAMP/" automatically, if not - click the link.

  6. On windows:
  6.1 Find phpMyAdmin and click the link, this will open a new tab with your database overview.

  6. On MacOS:
  6.2 Navigate the page to find the MySql tab, open the MySql tab and then click the phpMyAdmin link inside.
        This will open a new tab with your database overview.

  7. On the phpMyAdmin site on the left side you will find a "new" on the top of the table. 
     Click it and then click "SQL" in the top navigation bar.

  8. From here you want to insert the statement "CREATE DATASEBASE nordicgreens;" and press go in the lower right. 
     IMPORTANT - The database must be named as above or it will not connect correctly with the system later.

  9. Now click on the newly created database on the left. Then click 'import' on the top navigation bar.

  10. Click "Browse your computer".

  11. Find the nordicgreens.sql and select it. Then go down the page and click go.

  12. Now you should have a imported the database correctly and can go to the next section.

---------------------------------------------------------------------------------------------------------------------------------

  How to make sure the files is the correct place:

  1. If not already done, extract the project .zip folder.

  2. Now you should have a folder with all the project files within them. 

  3. Find the htdocs location on your computer:

  On windows:
  3.1 Find the location where your MAMP folder is.
  
  3.1.2 Most likely to be installed in the following path: "This PC -> C: -> MAMP".

  3.1.3 Locate the htdocs folder and open it.

  On MacOS:
  3.2.1 Open finder.

  3.2.2 Click apps and find MAMP.

  3.2.3 Open htdocs within your MAMP folder.
  
  4. While the htdocs folder is open, find the project files in file explore and drag them into the htdocs folder.
 
  4.5 Replace files if asked.

  5. The file should be in the correct place now and you can close the folders.

---------------------------------------------------------------------------------------------------------------------------------
  
  Opening the website - including login details to the erhvers page.

  1. Make sure your MAMP server is online. 
  
  2. Open the following website in your prefered browser: "localhost:8888/index.php".

  3. IF you want to login on the erhvers page use the following user:
     User     : test@test.com
     Password : 123

---------------------------------------------------------------------------------------------------------------------------------
Last by not least: Enjoy 
                                                 ,/
                                                //
                                              ,//
                                  ___   /|   |//
                              `__/\_ --(/|___/-/
                           \|\_-\___ __-_`- /-/ \.
                          |\_-___,-\_____--/_)' ) \
                           \ -_ /     __ \( `( __`\|
                           `\__|      |\)\ ) /(/|
   ,._____.,            ',--//-|      \  |  '   /
  /     __. \,          / /,---|       \       /
 / /    _. \  \        `/`_/ _,'        |     |
|  | ( (  \   |      ,/\'__/'/          |     |
|  \  \`--, `_/_------______/           \(   )/
| | \  \_. \,                            \___/\
| |  \_   \  \                                 \
\ \    \_ \   \   /                             \
 \ \  \._  \__ \_|       |                       \
  \ \___  \      \       |                        \
   \__ \__ \  \_ |       \                         |
   |  \_____ \  ____      |                        |
   | \  \__ ---' .__\     |        |               |
   \  \__ ---   /   )     |        \              /
    \   \____/ / ()(      \          `---_       /|
     \__________/(,--__    \_________.    |    ./ |
       |     \ \  `---_\--,           \   \_,./   |
       |      \  \_ ` \    /`---_______-\   \\    /
        \      \.___,`|   /              \   \\   \
         \     |  \_ \|   \              (   |:    |
          \    \      \    |             /  / |    ;
           \    \      \    \          ( `_'   \  |
            \.   \      \.   \          `__/   |  |
              \   \       \.  \                |  |
               \   \        \  \               (  )
                \   |        \  |              |  |
                 |  \         \ \              I  `
                 ( __;        ( _;            ('-_';
                 |___\        \___:            \___:
