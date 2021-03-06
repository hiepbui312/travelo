<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=fact&action=create" class="btn btn-primary">Add user</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List Facts</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Name</th>
                    <th>Content</th>
                    <th>Photo</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $rows->name; ?></td>
                    <td><?php echo $rows->content; ?></td>
                    <td><?php echo $rows->photo; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=fact&action=update&id=<?php echo $rows->id; ?>">Edit</a>&nbsp;
                        <a href="index.php?controller=fact&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
            	<?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <div>
            	<ul class="pagination">
            		<li class="disabled"><a href="#">Page</a></li>
            		<?php for($i = 1; $i <= $numPage; $i++): ?>
            		<li><a href="index.php?controller=fact&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            		<?php endfor; ?>
            	</ul>
            </div>
        </div>
    </div>
</div>