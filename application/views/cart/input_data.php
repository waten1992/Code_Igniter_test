<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="utf-8" lang="utf-8">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>My Form</title>
    </head>
    <style>

        body {
            width: 35em;
            margin: 0 auto;
            padding: 5px;
            font-family: Tahoma, Verdana, Arial, sans-serif;
        }
        ul
        {
            list-style-type:none;
            margin:0;
            padding:0;
            overflow:hidden;
        }
        li
        {
            float:left;
        }
        a:link,a:visited
        {
            display:block;
            width:120px;
            font-weight:bold;
            color:#FFFFFF;
            background-color:#bebebe;
            text-align:center;
            padding:4px;
            text-decoration:none;
            text-transform:uppercase;
        }
        a:hover,a:active
        {
            background-color:#cc0000;
        }

    </style>
    <body>
       

        <?php echo validation_errors(); ?>

        <?php echo form_open('form/add_cart'); ?>

        <h5>商品编号</h5>
        <?php echo form_error('item_id'); ?>
        <input type="text" name="item_id" value="<?php echo set_value('item_id'); ?>" size="30" />

         <h5>商品名称</h5>
        <?php echo form_error('item_name'); ?>
        <input type="text" name="item_name" value="<?php echo set_value('item_name'); ?>" size="30" />
        
        <h5>价格</h5>
        <?php echo form_error('price'); ?>
        <input type="text" name="price" value="<?php echo set_value('price'); ?>" size="50" />

        <h5>数量</h5>
        <?php echo form_error('qty'); ?>
        <input type="text" name="qty" value="<?php echo set_value('qty'); ?>" size="50" />
     

        </form>

    </body>
</html>