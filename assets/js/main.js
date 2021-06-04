
// DELETE BUTTON
document.getElementById('deleteBtn').onclick = function(){
	Swal.fire({
		title: "Do you want to delete it?",
        icon: "error",
		text: "You will not be able to recover this imaginary file!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes, delete it!',
		closeOnConfirm: false,
		//closeOnCancel: false
	},
	function(){
		Swal("Deleted!", "Your imaginary file has been deleted!", "success");
	});
};
// LOGOUT
// document.getElementById('btnLogout').onclick = function(){
// 	Swal.fire({
// 		title: "Do you want to delete it?",
//         icon: "error",
// 		text: "You will not be able to recover this imaginary file!",
// 		type: "warning",
// 		showCancelButton: true,
// 		confirmButtonColor: '#DD6B55',
// 		confirmButtonText: 'Yes, delete it!',
// 		closeOnConfirm: false,
// 		//closeOnCancel: false
// 	},
// 	function(){
// 		location.href = "location:logout.php";
// 	});
// };
