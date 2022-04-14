
<?

if(is_array($us)){
    extract($us);
  
    }?>
<div>
    <div class="row">
        <H1>CẬP NHẬT USER</H1>
    </div>
    <div class="box">
        <form action="index.php?act=updateuser" method="post">        
            <div class="row">
                VAI TRÒ        
                <br>
                <? if($vai_tro==1)$vai_tro1="Khách hàng";else $vai_tro1="Quản lý"; ?>

                <select class="mrbt10" name="vaitro" id="" required>
                        <option value="">--CHỌN LẠI--</option>
                        <option value="1">Khách hàng</option>
                        <option value="2">Quản lý</option>
                </select>
                <input class="text-black bg-warning" type="submit" name="suavaitro" value="Đồng ý">
            </div>
            </div>
        </div>
        
        <div>       
        <input type="hidden" name="id" value="<?=$ten_dang_nhap?>">
        <td class="border">
            <?php if(isset($thongbao)&&($thongbao="")) echo $thongbao?>
        </div>
        </form>
    </div>
</div>