const productID = document.getElementById("p_id");
const submit = document.getElementById("submit");

submit.addEventListener("click", (e) => {
    e.preventDefault();
    const p_id = productID.value;
console.log(p_id);
if (p_id === "123AB") {
	window.open("Modify_Products.php");
}
productID.value = '';
})