<?php 
if(is_array($us)){
    extract($us);
}
?>
<div class="row">
    <div class="row frmtitle">
        <H1>CẬP NHẬT USER</H1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updateuser" method="post">
            
            <div class="row mb10">
                VAI TRÒ        
                <br>
                <? if($vai_tro==1)$vai_tro1="Khách hàng";else $vai_tro1="Quản lý"; ?>
                <select name="vaitro" id="" required>
                        <option value="">--CHỌN LẠI--</option>
                        <option value="1">Khách hàng</option>
                        <option value="2">Quản lý</option>
                </select>
            </div>
            </div>
        </div>
        <div class="row mb10">       
        <input type="hidden" name="id" value="<?=$id?>">
        <td>
            <input type="submit" name="suavaitro" value="Đồng ý">
            <?php if(isset($thongbao)&&($thongbao="")) echo $thongbao?>
        </div>
        </form>
    </div>
</div>
    </div>

    