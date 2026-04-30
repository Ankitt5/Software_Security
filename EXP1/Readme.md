# Code Analysis for Security Flaws

## Aim
To analyze sample C/Python code and identify basic security vulnerabilities like buffer overflow, improper input handling, and hardcoded credentials.

---

## Theory
Many security issues come from poor coding practices. Common vulnerabilities include:
- Buffer overflow (in C)
- Insecure input handling
- Hardcoded usernames/passwords

Static analysis and manual code review help detect such issues early.

---

## Methodology
1. Collected sample C and Python code snippets  
2. Reviewed the code manually line by line  
3. Identified unsafe functions (e.g., gets(), strcpy()) in C  
4. Checked for improper input validation in Python  
5. Looked for hardcoded credentials in the code  
6. Noted all vulnerabilities and suggested fixes  

---

## Results
- Found unsafe functions that may cause buffer overflow  
- Identified lack of input validation  
- Detected hardcoded credentials in code  

---

## Discussion
The experiment shows that small coding mistakes can lead to serious vulnerabilities. Manual code review is important for writing secure applications.

---

## Future Scope
- Use automated static analysis tools  
- Learn secure coding standards  
- Practice with real-world codebases  

---

## Tools Used
- Manual Code Review  
- Basic Static Analysis Tools  
