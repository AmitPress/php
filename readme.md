# Learning PHP

#### Chapter 1:
    
**TODO** :
<ol>
    <li>Describing paradigms
    <li>Describing how to learn language effectively
    <li>Describing the main aspect of programming
    <li>How php is a good choice
    <li>How php is a gamble
    <li>When to left php
</ol>

**Disclaimer:**
Here I will discuss this things only for me(in the future, cause I often forget this crucial things). As github charges a certain price for private repo so I am kind of helpless while writing it in public domain. So, wanna criticize ? go ahead , 'cause I think I put my point clear above.

**Where to start:**
The answer is easy. Always start with the core of the language. Because language changes but core doesn't. Core remains same for every language.

**Main paradigms:**  
There are several paradigms which brought the diversity and new awesome features to a language. Every language extended some new feature to their core.

**Lets discuss some paradigms:**
<ol>
    <li>Structural
    <li>Imperative
    <li>Procedural
    <li>OOP
    <li>Actor Model
    <li>Class
    <li>Prototypal
    <li>Concurrent
    <li>Meta Programming
    <li>Macro
    <li>Template
    <li>Declarative
    <li>Functional
</ol>

These are some paradigms which are the building blocks to a programming language.

#### 1. Structural
If there is any structural thing of programming the there must be a unstructured way as well. So, the unstructured way of programming was a mess because of its unmaintainability. Unstructured codes create sphaggati code that means jumbled mumbled super incomprehensible code. Lets think a language that has no functions. How would that code be like? Unstructured codes are full of **goto** statements that makes it super nasty.
So, structural programming is like a strategy which allows code reusablity through function or a packet of codes.

#### 3. Procedural
Simple, the style that follows or allows procedure. But what is procedure? Answer: steps of instructions. It often refers to proc, subroutine, routine, function.
We are basically accustomed to using function as procedure. So what is function? Simply it is a chunk of code that is necessarily coded in a separate block that is isolated from other parts of the code and can share states through parameters. We often think that the static states of a function is available globally, which is wrong. static variables are only used to make the states stay static that means if the procedure gets finished the static data will not get back to its initial state.

Basically, function is a block of totally isolated instructions that can be invoked in necessity.

#### 4 . OOP
Object oriented programming is a elegant way of programming. It is a revolutionary approach to programming. It really well cope up the real world senarios. But it is not well suited for systems programming even if it is possible. To make good software/game OOP is the finest choice.
OOP styles differ with language syntax.
Actor model gives a type of OOP that is based on actors rather than objects. Actors here act like objects. They works like threads but they are so much lightweight than threads. AKKA and elixi uses actor model as their primary way of doing OOP.

Besides, OOP includes these charecteristics,
    <ul>
        <li>class
        <li>object
        <li>inheritance
        <li>polymorphism
        <li>abstruction
        <li>encapsulation
    </ul>

**Class** is the blue print of an object. It is like a mixture of structure and function. In OOP functions are called methods. A class has two parts, i) structural ii) functional 
A structure is a user defined data-type and a function refers to **work** .

Structural part gives a structure to the object specifing the charecteristics or attributes of that object. And functional part makes relations with those charecteristic. The states can be changed based on the relation with other attributes of the same object or with an external parameter can change the state.


Concurrency is a different topic --> reserved for future dicussion

#### 9. Meta Programming
Meta programming means self programming. That means programming of the programming language. So, meta programming feature allows user to make changes with current official syntax. So, programmers can tweak the language and can make a convenient change.
We have seen function templating , class templating in c++. This templating is another style of programming. Macros are also a way that is used to do meta programming. proc_macro of rust is used to do such.

#### 10. Declarative

Here we will discuss Imperative vs Declarative approach

Imperative approach is like english grammer's imperative mood. It explains the machine what to do and how to do through lines of instruction. So, imperative generally means the 'from the scratch' approach. In the other hand, declaritive means you just need to cherry pick the stuffs you need.

Here OOP comes in both of the categories.
But in the true sense, OOP is of declarative manner. The imperative manner of OOP is that when we create the class. Class creation is totally imperative. But when we declare an object, we are given a lot options with the object and we later on will choose which option we want to use. So, in declarative manner all the things are already available, now we have to pick the appropriate ones and do our work.
