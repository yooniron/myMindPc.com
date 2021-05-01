function change_v(e){
    document.getElementById("hid").value = e.getAttribute('id');
    document.estimate_list.submit();
}

function submit_list(c){
	document.update_form.Product_idx.value=c.getAttribute('data-idx');
	update_form.action = "update_product.php";
	document.update_form.submit();
	
}

function remove_list(r){
	document.update_form.Product_type.value = r.getAttribute('id');
	document.update_form.Product_idx.value=r.getAttribute('data-idx');
	
	update_form.action = "remove_product.php";
	document.update_form.submit();
}

