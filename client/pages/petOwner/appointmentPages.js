
function toggleButtonSide (someIcon) {
    someIcon.classList.toggle('bxs-down-arrow-circle')
    someIcon.classList.toggle('bxs-up-arrow-circle')
}

const appointmentsSection = document.querySelector('.appointments-container')
const appointmentsExpandIcon = document.getElementById('upcomingAppointments').querySelector('i')

const expandAppointmentsBtn = document.getElementById('expandAppointmentsBtn')
expandAppointmentsBtn.addEventListener('click', () => {
    appointmentsSection.classList.toggle('scrollAppointments')

    toggleButtonSide(appointmentsExpandIcon)
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
