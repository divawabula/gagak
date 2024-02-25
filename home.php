<main>	<aside id="desktop-sidebar"></aside><article><div style="overflow:hidden;"><h2 class="cat"><span class="glyphicon glyphicon-time"></span> Latest Updates Mp3</h2>
		
<?php //batas
            $query = "SELECT * FROM mytable LIMIT 20";
            $hasil = mysqli_query($link, $query);
            if (mysqli_num_rows($hasil) > 0 ){
                while ($data = mysqli_fetch_assoc($hasil)){
            ?>
            <div class="section5">
                <div class="duall">
                    <table cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td align="left" width="64px"><img src="https://img.gs/qkhrqgfflk/70x70,fit/<?=$data['cover']?>" alt="<?=$data['judul']?>" width="60px" height="60px" style="padding:0;" class=" lazyloading"></td>
                                <td valign="top"><strong><a href="download.php?id=<?=$data['id']?>" rel="bookmark" title="<?=$data['judul']?>"><?=$data['artist']?> - <?=$data['title']?></a></strong><br><?=$data['folder']?><br>
                                    <div class="a3a3a3">Fri, 05 Mar 2021 (12:04)</div>
                                </td>
                                <td align="right" valign="middle" width="80px"><span class="taga"><?=$data['year']?></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php //batas
                }
            }
            
            ?>

		
		
		
		<div class="A2" align="right"><a href="/site-update.html?to-page=2" ><div class="updatea" ref="nofollow"><b>[More Updates...]</b></div></a></div></div></article></main>