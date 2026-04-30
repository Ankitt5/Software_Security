# Input-Based Attacks and Protection

## Aim
To perform basic SQL Injection and XSS attacks on a test application and apply input validation as a countermeasure.

---

## Theory
Input-based attacks occur when user input is not properly validated:
- SQL Injection: attacker manipulates database queries  
- XSS: attacker injects malicious scripts into web pages  

Proper input validation and sanitization can prevent these attacks.

---

## Methodology
1. Set up a test environment (DVWA or local app)  
2. Tested login fields with SQL injection payloads  
3. Tried script injection for XSS  
4. Observed application behavior  
5. Applied input validation and sanitization  
6. Re-tested to confirm protection  

---

## Results
- SQL Injection was successful without validation  
- XSS script executed in browser  
- After applying validation, attacks were prevented  

---

## Discussion
This experiment shows how dangerous user input can be if not handled properly. Even simple validation can significantly improve security.

---

## Future Scope
- Learn advanced injection techniques  
- Implement secure coding practices  
- Use frameworks with built-in protection  

---

## Tools Used
- DVWA / Local Test App  
- Web Browser  
