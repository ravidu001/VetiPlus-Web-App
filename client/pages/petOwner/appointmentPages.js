
function toggleButtonSide (someIcon) {
    someIcon.classList.toggle('bxs-down-arrow-circle')
    someIcon.classList.toggle('bxs-up-arrow-circle')
}

const upcomingAppointmentsSection = document.getElementById('upcomingAppointments').querySelector('.appointments-container')
const expandUpcomingAppointmentsBtn = document.getElementById('expandUpcomingAppointmentsBtn')
const upcomingAppointmentsExpandIcon = expandUpcomingAppointmentsBtn.querySelector('i')

expandUpcomingAppointmentsBtn.addEventListener('click', () => {
    upcomingAppointmentsSection.classList.toggle('scrollAppointments')
    toggleButtonSide(upcomingAppointmentsExpandIcon)
})


const historicalAppointmentsSection = document.getElementById('historicalAppointments').querySelector('.appointments-container')
const expandHstoricalAppointmentsBtn = document.getElementById('expandHstoricalAppointmentsBtn')
const historicalAppointmentsExpandIcon = expandHstoricalAppointmentsBtn.querySelector('i')
expandHstoricalAppointmentsBtn.addEventListener('click', () => {
    historicalAppointmentsSection.classList.toggle('scrollAppointments')
    toggleButtonSide(historicalAppointmentsExpandIcon)
})

const providerCardsSection = document.querySelector('.providerCard-container')
const providerExpandIcon = document.getElementById('availableSalons').querySelector('i')

const expandProvidersBtn = document.getElementById('expandProvidersBtn')
expandProvidersBtn.addEventListener('click', () => {
    
    providerCardsSection.classList.toggle('cardsScrollX')
    providerCardsSection.classList.toggle('cardsWrap')

    toggleButtonSide(providerExpandIcon)

    if(providerCardsSection.classList.contains('cardsScrollX')) {
        providerCardsSection.addEventListener('wheel', (e) => {
            e.preventDefault();
            providerCardsSection.scrollLeft += e.deltaY;
        })
    } else providerCardsSection.removeEventListener('wheel')
})
