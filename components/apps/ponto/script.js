function updateHour () {
  const elementHora = document.getElementById('time')
  const data = new Date()
  const time = data.toLocaleTimeString()
  elementHora.textContent = time
}
setInterval(updateHour, 1000)
updateHour()

function updateDay () {
  const data = new Date()

  const elementDay = document.getElementById('day')
  const arrayWeek = [
    'Domingo',
    'Segunda-Feira',
    'Terça-Feira',
    'Quarta-Feira',
    'Quinta-Feira',
    'Sexta-Feira',
    'Sábado'
  ]
  const day = arrayWeek[data.getDay()]
  elementDay.textContent = day
}
updateDay()

function updateDate () {
  const elementDate = document.getElementById('date')
  const data = new Date()
  const time = data.toLocaleDateString()
  elementDate.textContent = time
}
updateDate()

function registerDateTime () {
  const now = new Date()
  const time = now.toLocaleTimeString()
  const timeElement = document.querySelector('#timer')
  timeElement.textContent = time
}

const registerButton = document.getElementById('registerButton')
registerButton.addEventListener('click', registerDateTime)

function registerDateTimeEnter () {
  const now = new Date()
  const time = now.toLocaleTimeString()
  const timeElement = document.querySelector('#timer-enter')
  timeElement.textContent = time
}

const registerEnter = document.getElementById('first-button')
registerEnter.addEventListener('click', registerDateTimeEnter)
