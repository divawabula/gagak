<?php include('header.php');
if (isset($_GET['id'])){
    $id = $_GET['id'];
}

    $query = "SELECT * FROM mytable WHERE id=$id";
            $hasil = mysqli_query($link, $query);
            if (mysqli_num_rows($hasil) > 0 ){
                while ($data = mysqli_fetch_assoc($hasil)){



?>
<main>
    <article>
    <?php //batas
            ?>
        <div class="col-6">
            <div class="col-s-9">
                <div class="margon">
                    <div class="filetag1">
                        <div class="filetag1">
                            <div class="filetag2">
                                <div class="tuku"><span class="glyphicon glyphicon-check"></span> Download <?=$data['artist']?> - <?=$data['title']?> [<?=$data['folder']?>] Mp3 </div>
                            </div>
                        </div>
                        <ul class="breadcrumb">
                            <li><span class="glyphicon glyphicon-home"></span><a href="/" rel="bookmark" title="Home">Home</a></li>
                            <li><a href="/site-update.html?to-page=1" rel="bookmark" title="Request">Music</a></li>
                            <li><a href="/site-search.html?to-q=<?=$data['artist']?>" rel="bookmark" title="music-artist%"><?=$data['artist']?></a></li>
                            <li> <?=$data['title']?></li>
                        </ul>
                        <div class="thumb">
                            <div class="polaroid"><span itemscope="" itemtype="https://schema.org/ImageObject">
                                    <div class="img-hover-zoom"><img data="" src="<?=$data['cover']?>" alt="<?=$data['album']?> - Gonimeost" title="<?=$data['album']?>" width="200px" height="200px" class="lazyload&quot;"></div>
                                </span></div>
                        </div>
                    </div>
                    <div class="filetag1">
                        <div class="rex2"><span class="glyphicon glyphicon-file"></span> File Info:</div>
                        <div class="sox">Title</div>
                        <div class="sok"><?=$data['title']?></div>
                        <div class="sox">Artist</div>
                        <div class="sok"><?=$data['artist']?></div>
                        <div class="sox">Album</div>
                        <div class="sok"><?=$data['album']?></div>
                        <div class="sox">File Size</div>
                        <div class="sok"><?=$data['size']?></div>
                        <div class="sox">Duration</div>
                        <div class="sok"><?=$data['duration']?></div>
                        <div class="sox">Bitrate</div>
                        <div class="sok"><?=$data['bitrate']?></div>
                        <div class="sox">Category</div>
                        <div class="sok"><a href="site-category.html?to-cat=%foid%" rel="bookmark" title="%folder_name%">%folder_name%</a></div>
                        <div class="sox">Note</div>
                        <div class="sok"><?=$data['folder']?></div>
                        <div class="sox">Added</div>
                        <div class="sok">%time_upl%</div><br><br>
                        <div class="rex2"><span class="glyphicon glyphicon-download-alt"></span> Download Mp3:</div>
                        <div class="kopler"></div>
                    </div>
                </div>
                <div class="downloadbox"><audio controls preload="metadata">
  <source src="<?=$data['link']?>" type="audio/mpeg">
Your browser does not support the audio element.
</audio><br><a href="<?=$data['link']?>" target="_blank" rel="nofollow" title="Download"><input type="submit" class="btn" value=" Download Mp3 (<?=$data['size']?>)"></a><br> </div>
                <div class="puding">
                    <div class="cokwe">
                        <div class="tengah"><b>Please Buy the Original Album : </b><br><a href="https://www.cdjapan.co.jp" target="_blank" rel="nofollow" title="CD Japan">CD Japan</a> | <a href="https://www.animate-onlineshop.jp" target="_blank" rel="nofollow" title="Animate">Animate</a> | <a href="https://tsutaya.tsite.jp" target="_blank" rel="nofollow" title="Tsutaya">Tsutaya</a> | <a href="https://amazon.co.jp" target="_blank" rel="nofollow" title="Amazon">Amazon</a> | <a href="https://www.apple.com/jp/itunes" target="_blank" rel="nofollow" title="Itunes">Itunes</a></div>
                    </div>
                    <div class="puding">
                        <div class="cokwe"></div>
                        <div class="keyword">Opening Anime , Ending Anime %folder_name%, Download OP ED %folder_name% MP3 Full Version, OST Anime %folder_name%, Download <?=$data['title']?>.mp3, Download <?=$data['artist']?> <?=$data['title']?>.mp3, <?=$data['title']?>.mp3, <?=$data['artist']?> <?=$data['title']?>.mp3, <?=$data['title']?>.mp3 download, download lagu <?=$data['title']?>.mp3, download lagu <?=$data['title']?> ost %folder_name%, <?=$data['title']?> mp3 download, download lagu <?=$data['title']?>, download lagu <?=$data['title']?> ost anime, <?=$data['title']?> <?=$data['artist']?>.mp3, <?=$data['artist']?> <?=$data['title']?> mp3 download, <?=$data['title']?> ost download, <?=$data['title']?> mp3 download, download , download lagu , download mp3, ost download</div>
                    </div>
                </div>
            </div><span class="koclok"><span class="glyphicon glyphicon-tags"></span><b>Tags : </b></span><a class="aimer" href="/site-category.html?to-cat=%foid%" rel="bookmark" title="%folder_name%">%folder_name%</a><a class="aimer" href="/site-search.html?to-search=<?=$data['artist']?>" rel="bookmark" title="<?=$data['artist']?>"><?=$data['artist']?></a>
        </div> 
        
        <?php }
        } ?>
        <div class="col-3 col-s-12">
            <h2 class="cat"><span class="glyphicon glyphicon-folder-open"></span> Related Song</h2>
            
            <?php //batas ?>
            <a href="/site-download.html?to-file=%id%" rel="bookmark" title="title">
                <div class="catlist2">
                    <div class="catlist3">
                        <table cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td width="80px"><img src="https://img.gs/qkhrqgfflk/70x70,fit/%music-thumb%" width="70px" height="70px" alt="title" class="imgclass lazyload">
                                        <div fallback=""></div>
                                    </td>
                                    <td valign="top" align="left"><a href="/site-download.html?to-file=%id%" rel="bookmark" title="artis"><strong>artist - title [%description%].mp3 </strong></a><br>
                                        <div class="a3a3a3"><span class="glyphicon glyphicon-time"></span> %time_upl%</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </a>
            <?php //tutupbatas ?> <div class="A2" align="right"><a href="/site-category.html?to-cat=:v1:fid:">
                    <div class="updatea" ref="nofollow"><b>[More Related...]</b></div>
                </a></div>
        </div>
        <div class="col-3 col-s-12">
            <h2 class="cat"><span class="glyphicon glyphicon-folder-open"></span> Related Song</h2>
            
            <?php //batas ?>
            <a href="/site-download.html?to-file=%id%" rel="bookmark" title="title">
                <div class="catlist2">
                    <div class="catlist3">
                        <table cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td width="80px"><img src="https://img.gs/qkhrqgfflk/70x70,fit/%music-thumb%" width="70px" height="70px" alt="title" class="imgclass lazyload">
                                        <div fallback=""></div>
                                    </td>
                                    <td valign="top" align="left"><a href="/site-download.html?to-file=%id%" rel="bookmark" title="artis"><strong>artist - title [%description%].mp3 </strong></a><br>
                                        <div class="a3a3a3"><span class="glyphicon glyphicon-time"></span> %time_upl%</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </a>
            <?php //tutupbatas ?> <div class="A2" align="right"><a href="/site-category.html?to-cat=:v1:fid:">
                    <div class="updatea" ref="nofollow"><b>[More Related...]</b></div>
                </a></div>
        </div>
    </article>
</main>
<?php include('footer.php');?>
*/