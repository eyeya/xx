<script type="text/javascript">
    const url = 'process.php';
    const form = document.querySelector('form');

    form.addEventListener('submit', e => {
        e.preventDefault();

        const files = document.querySelector('[type=file]').files;
        const formData = new FormData();

        for (let i = 0; i < files.length; i++) {
            let file = files[i];

            formData.append('files[]', file);
        }

        // Uses browser's built in Fetch API - you can replace this with jQuery or whatever you choose.
        fetch(url, {
            method: 'POST',
            body: formData
        }).then(response => {
            console.log(response);
        });
    });
</script>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple>
    <input type="submit" value="Upload File" name="submit">
</form>
