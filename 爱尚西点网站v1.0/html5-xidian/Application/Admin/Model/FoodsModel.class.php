<?php
namespace Admin\Model;
use Think\Model;

class FoodsModel extends Model {
	protected $_validate = array(
			array("name", "require", "美食名称不能为空！"),
			array("practice", "require", "步骤不能为空！"),
			array("ingredients", "require", "材料不能为空！"),
			array("classify", "require", "类型不能为空！"),
			array("tagname", "require", "标签不能为空！"),
		);
}