export function initCustomSelect() {
    const selectNodes = document.querySelectorAll('.form-node-select')
    if (!selectNodes) {
        return
    }

    document.addEventListener('click', toggleSelect)
    document.addEventListener('change', updateSelectValue)
}

function toggleSelect(event) {
    const target = event.target
    const formNode = target.closest('.form-node-select')

    if (!isSelectNodeEvent(event)) {
        const selectNodes = document.querySelectorAll('.form-node-select')
        if (!selectNodes) {
            return
        }

        selectNodes.forEach((selectNode) => {
            selectNode.classList.remove('form-node-select-active')
        })
        return;
    }

    formNode.classList.toggle('form-node-select-active')
}

function updateSelectValue(event) {
    const target = event.target
    const formNode = target.closest('.form-node-select')

    if (!isSelectNodeEvent(event)) {
        return
    }
    const hiddenInput = formNode.querySelector('input[type="hidden"]')
    const checkboxes = formNode.querySelectorAll('input[type="checkbox"]')
    const trigger = formNode.querySelector('.form-select-trigger')
    const triggerLabel = trigger.querySelector('span')

    let values = [];
    let labels = []
    checkboxes.forEach((checkbox)=>{
        const checked = checkbox.checked
        const value = checkbox.value
        if (!checked || !value){
            checkbox.closest('.form-select-item').classList.remove('form-select-item-selected')
            return
        }

        checkbox.closest('.form-select-item').classList.add('form-select-item-selected')
        values.push(value)

        let label = checkbox.parentNode.querySelector('label')
        if (label){
            label = label.textContent
            labels.push(label)
        }
    })
    hiddenInput.value = values.join(',')

    if (labels.length === 0){
        triggerLabel.textContent = trigger.dataset.placeholder ?? 'Выбрать значение'
    }else{
        let label = labels.join(', ')
        if (label.length >= 34){
            label = label.slice(0, 30) + '...'
        }
        triggerLabel.textContent = label
    }
}

function isSelectNodeEvent(event) {
    const target = event.target
    const formNode = target.closest('.form-node-select')

    return formNode !== null
}

function isSelectNodeTriggerEvent(event) {
    const target = event.target
    const trigger = target.closest('.form-select-trigger')

    return isSelectNodeEvent(event) && trigger !== null
}
