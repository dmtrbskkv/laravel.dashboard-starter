export function initSidebar() {
    const sidebar = document.querySelector('.sidebar')
    if (!sidebar) {
        return
    }

    sidebar.querySelectorAll('.sidebar-nav__item-group>.sidebar-nav__item').forEach((item) => {
        item.addEventListener('click', (event) => {
            const target = event.target
            const itemGroup = target.closest('.sidebar-nav__item-group')

            if (!itemGroup) {
                return
            }

            itemGroup.classList.toggle('sidebar-nav__item-group-active')
        })
    })
}
