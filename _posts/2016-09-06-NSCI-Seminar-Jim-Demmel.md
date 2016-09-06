---
layout: post
title: "NSCI Seminar: Communication-Avoiding Algorithms for Linear Algebra and Beyond"
abstract: 
author: Marcin Ziolkowski
---

**Presenter:** Jim Demmel, UC Berkeley   
**Time:**  1:00 p.m. - 2:00 p.m.   
**Place:** Watts Family Innovation Center Auditorium (streamed from NIST)  

**Abstract**  
Algorithms have two costs: arithmetic and communication, i.e. moving data between levels of a memory hierarchy or processors over a network. Communication costs (measured in time or energy per operation) already greatly exceed arithmetic costs, and the gap is growing over time following technological trends. Thus our goal is to design algorithms that minimize communication. We present algorithms that attain provable lower bounds on communication, and show large speedups compared to their conventional counterparts. These algorithms are for direct and iterative linear algebra, for dense and sparse matrices, direct n-body simulations, and some machine learning algorithms. Several of these algorithms exhibit perfect strong scaling, in both time and energy: run time (resp. energy) for a fixed problem size drops proportionally to the number of processors p (resp. is independent of p). Since for some emerging non-volatile memory technologies writes are much more expensive than reads, we also present write-avoiding algorithms, that also do asymptotically fewer writes than reads. Finally, we describe extensions to algorithms involving very general loop nests and array accesses, in a way that could be incorporated into compilers.

