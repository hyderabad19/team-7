wife(dasaratha,sumitra).

male(dasaratha).
male(rama).
male(lakshmana).
male(bharata).
male(shatrughna).
male(lava).
male(kusa).
female(kaushalya).
female(sumitra).
female(kaikeyi).
female(sita).

parent(dasaratha,rama).
parent(dasaratha,lakshmana).
parent(dasaratha,bharata).
parent(dasaratha,shatrughna).
parent(sumitra,lakshmana).
parent(sumitra,shatrughna).
parent(kaushalya,rama).
parent(kaikeyi,bharata).
parent(rama,lava).
parent(rama,kusa).
parent(sita,kusa).
parent(sita,lava).

mother(X,Y):-parent(X,Y),female(X).
father(X,Y):-parent(X,Y),male(X).
haschild(X):-parent(X,_).
