const roleSelect = document.querySelectorAll(".roleSelect");

roleSelect.forEach((elm) => {
    elm.addEventListener("change", function () {
        roleId = this.value
        userId = this.getAttribute('data-user-id')
        changeRole(roleId, userId);
    })
})

function changeRole(id, userId) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "post",
        url: "/dashboard/update",
        data: {id, userId},
        success: (data) => {
            console.log(data)
        }
    })
}
