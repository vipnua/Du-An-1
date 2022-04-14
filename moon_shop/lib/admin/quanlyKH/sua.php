
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
                <?php if($us['vai_tro']==1)$vai_tro1="Khách hàng";else $vai_tro1="Quản lý"; ?>
                <div class="row mrt10"> Vai trò hiện tại <br>
                <input type="text" disabled value="<?=$vai_tro1 ?>">
                </div>
                <div class="row mrbt10">  <select name="vaitro" required>
                        <option value="">--CHỌN LẠI--</option>
                        <option value="1">Khách hàng</option>
                        <option value="2">Quản lý</option>
                </select></div>
                <div class="row mrt10"> <input type="hidden" name="id" value="<?=$us['ten_dang_nhap'] ?>">
                <input type="submit" name="suavaitro" value="Đồng ý" class="text-black bg-warning">
                </div>
                
            </div>
            </div>
        </div>
        
        <div>       
        
        <td class="border">
                        
        </div>
        </form>
    </div>
</div>