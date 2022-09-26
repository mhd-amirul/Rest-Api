// =================CHANGE TO JSON
// let mhs = {
// 	nama: "Muhammad Amirul",
// 	nim: "1857301023",
// 	hobi: {
// 		hobi1: "Gaming",
// 		hobi2: "Coding",
// 		hobi3: "Sport"
// 	},
// 	email: "amirul@pnl.ac.id"
// }

// console.log(JSON.stringify(mhs));

// =============VANILA JAVASCRIPT CHANGE TO OBJECT
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
// 	if (xhr.readyState == 4 && xhr.status == 200) {
// 		let mhs = JSON.parse(this.responseText);
// 		console.log(mhs);
// 	}
// }
// xhr.open('GET', 'data.json', true);
// xhr.send();

// ================ JQUERY CHANGE TO OBJECT
$.getJSON('data.json', function (mhs) {
	console.log(mhs);
})