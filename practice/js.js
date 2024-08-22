// document. addEventListener('DOMContentLoaded', function () {
//     const button1 = document.getElementById('btn1')
//     const name1 = document.getElementById('name')

//     button1.addEventListener('click', () => {
//         name1.textContent = 'Руми бот'

//     }) 
// })

// let array1= [1, 2, 3, 4, 5, 10]

// let array2 = [2, 3, 5 , 7, 9]

// let flag = false

// function checkFor2(array) {
//     for(let i = 0; i < array.length; i++) {
//         if (array[i] >= 10) {
//             alert("в этом массиве есть двузначное число")
//             flag = true
//             break
//         } 
//     }
//     if(flag == false) {
//         alert("в этом массиве нет двузначного числа")
//     }
    
// }

// // checkFor2(array1)
// checkFor2(array2)

let button = document.getElementById('btn')
let button1 = document.getElementById('btn1')
let img = document.getElementById('img')

button.addEventListener('click', () => {
    window.location.href = 'https://lessons.kz/teachers/insar'
})

button1.addEventListener('click', () => {
    img.src='https://stamina-online.com/assets/images/welcome/exercises.png'
})