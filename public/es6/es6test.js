'use strict';

const sentences =[
    {subject:'JavaScript',verb:'is',object:'great'},
    {subject:'Tiger',verb:'are',object:'large'},
];

function say({subject,verb,object}){
    console.log(`${subject},${verb},${object}`);
}

for(let s of sentences){
    say(s);
}