// Checks if the uses current time mintue is odd
function MinuteIsOdd() {
    const time = new Date();
    const minute = time.getMinutes();
    return minute % 2 !== 0;
    }
    //Takes the return and checks wether its true or false 
    function DiscountMessage() {
        if (MinuteIsOdd()) {
            alert("CONGRATS! You get a discount!");
        } else {
            alert("not this time, you didn't get a discount");
        }
    }
        document.addEventListener("click", function () {
            const DiscountButton = document.getElementById("Discount-Button");
        
            if (DiscountButton) {
                DiscountButton.addEventListener("click", DiscountMessage);
        }  
    });    

document.addEventListener("DOMContentLoaded", function () {
    const deleteButtons = document.querySelectorAll(".delete-btn");

    deleteButtons.forEach((button) => {
        button.addEventListener("click", function (e) {
            var itemId = e.currentTarget.getAttribute("data-id");
            console.log(itemId);
            if (confirm(`Are you sure you want to delete this record with ID ${itemId}?`)) {
                // Redirect to a delete confirmation page or use AJAX to delete the record from the database
                window.location.href = `delete.php?id=${itemId}`;
            }
        });
    });
});
