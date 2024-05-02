function show_question(title, description) {
    return new Promise((resolve) => {
        Swal.fire({
            title: title,
            text: description,
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No'
        }).then((result) => {
            if (result.isConfirmed) {
                resolve(true); 
            } else {
                resolve(false); 
            }
        });
    });
}