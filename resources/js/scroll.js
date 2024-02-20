(function () {
    window.addEventListener('DOMContentLoaded', () => {
        let url = window.location.search
        if (url) {
            document.querySelector('main section.all-products').scrollIntoView({ behavior: 'smooth', block: 'center' })
        }
    })
})()
