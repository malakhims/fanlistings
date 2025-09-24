   <?php
                function getLastModifiedFileTime($dir) {
                    $lastMod = 0;
                    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
                    foreach ($iterator as $file) {
                        if ($file->isFile()) {
                            $modTime = $file->getMTime();
                            if ($modTime > $lastMod) {
                                $lastMod = $modTime;
                            }
                        }
                    }
                    return $lastMod;
                }

                // Current script last updated
                $lastUpdatedTime = filemtime(__FILE__);
                $lastUpdated = date("F j, Y, g:i a", $lastUpdatedTime);

                // Entire site "last activity"
                $siteDir = $_SERVER['DOCUMENT_ROOT']; // root of your site
                $lastActiveTime = getLastModifiedFileTime($siteDir);
                $lastActive = date("F j, Y, g:i a", $lastActiveTime);

                // Display
                echo "<h2>Last Page Update:</h2> $lastUpdated<br>";
                echo "<h2>Webmaster Last Online:</h2> $lastActive<br>";
                ?>