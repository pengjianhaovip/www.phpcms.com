<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content', 'header'); ?>

<div class="main">

    <form method="post" action="<?php echo APP_PATH;?>index.php?m=course&c=index">
        <p>姓名: <input type="text" name="data[nickname]"> </p>
        <p>性别:
            <input type="radio" checked name="data[sex]" value="1"> 男
            <input type="radio" name="data[sex]" value="2"> 女
        </p>
        <p>毕业学院: <input type="text" name="data[school]"> </p>
        <p>高考报名号: <input type="text" name="data[school_number]"> </p>
        <p>身份证号码: <input type="text" name="data[card]"> </p>
        <p>电话号码: <input type="text" name="data[phone]"> </p>
        <p>家长电话: <input type="text" name="data[parents_phone]"> </p>
        <p>
            <input type="submit" value="保存">
            <input type="reset" value="重置">
        </p>
    </form>
    <a href="<?php echo APP_PATH;?>index.php?m=course&c=index&a=search">去查询</a>
</div>

<?php include template('content', 'footer'); ?>