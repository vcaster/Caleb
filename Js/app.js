// // loops
//
// for (let i  = 0; i < 20; i
//     console.log(i);
//   if (i == 2){
//     console.log('2 is my fav number');
//     continue;
//   }
//
//
//   if (i == 11){
//     console.log("the loop");
//     break;
//   }
//   console.log(i);
// }
// while loops
// let j = 0;
//
// while(j < 10){
//   console.log(`Number ${j}`);
//   j++;
// }
//do while loops
// let j = 0;
//
// do{
//   console.log(`number ${j}`);
//   j++;
// }while(j<32);

//loop through arrays
//es5
// let k = [323,43,5,54643,4232,2];
//
// for(let i = 0; i < k.length; i++){
//   console.log(k[i]);
// }
//
 // let w = ['uzi','ak-47','p-90','akm','scar'];
//
// for(let i = 0; i < w.length; i++){
//   console.log(w[i]);
// }
//es6
// for(let item of w ){
//   console.log(item);
// }

// w.forEach(function(ws){
//   console.log(ws);
// });

// w.forEach(function(ws,index){
//   console.log(`${ws} : ${index}`);
// });
//loop with objects

// let ninjas = [
//   {
//     id: 1,
//     name: "ninja 1"
//   },
//   {
//     id: 2,
//     name: "ninja 2"
//   },
//   {
//     id: 3,
//     name: "ninja 3"
//   }
// ];
//
// for (let ninja of ninjas){
//   console.log(ninja.name , ninja.id);
// }
// ninjas.forEach(function(id){
//    console.log(` ${id.name}`);
//   });

// let ids = ninjas.map(function (ninja){
//   return ninja.id;
// });
// console.log(ids);

// const ninja = {
//   name: "ninja 1",
//   weapon: "cloud",
//   armor: "invisibility",
//   brutality: true
// }
// for (let item in ninja)
// {
//   console.log(ninja[item]);
// }

//Global variable
var a = 34
let b = 3
const c = 43

console.log(`Global scope = ` , a,b,c);

function test()
{
  var a = 1;
  let b = 2;
  const c = 3;

  console.log(`Function scope = ` , a,b,c);
  if (true){
    var a = 144;
    let b = 244;
   const c = 344;

    console.log(`Block scope = ` , a,b,c);
  }

}

test();
