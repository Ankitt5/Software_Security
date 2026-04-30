# Vulnerability Scanning (Passive Mode)

## Aim
To scan a web application and identify common security issues using a safe and non-intrusive method (passive scanning).

---

## Theory
Vulnerability scanning is the process of identifying security weaknesses in a system or web application. These weaknesses may include missing security headers, insecure cookies, or misconfigurations.

Passive scanning is a safe approach where the tool analyzes the traffic between the browser and the web application without sending harmful or intrusive requests. It only observes and reports potential issues, making it suitable for learning and testing.

OWASP ZAP is an open-source web application security scanner that helps in detecting such vulnerabilities.

---

## Methodology
1. Install and open **OWASP ZAP**  
2. Ensure the tool is running in **Passive Scan Mode**  
3. Enter the target website URL (safe/test website)  
4. Browse the website normally through ZAP or using its proxy  
5. Let ZAP capture and analyze the traffic  
6. Go to the **Alerts/Results** section  
7. Observe the vulnerabilities detected and their risk levels  

---

## Results
- Missing security headers such as Content-Security-Policy and X-Frame-Options  
- Cookies without proper security flags like HttpOnly or Secure  
- Some server-related information was exposed in responses  

---

## Discussion
The results show that even basic web applications can have security issues if not properly configured. Passive scanning is useful because it identifies problems without affecting the target system.

These vulnerabilities, if not fixed, can be exploited by attackers to gain information or compromise user data.

---

## Future Scope
- Perform active scanning in a controlled lab environment  
- Automate vulnerability scanning using scripts  
- Learn and use advanced tools like Burp Suite  
- Fix identified vulnerabilities and re-test  

---

## Tools Used
- OWASP ZAP – https://www.zaproxy.org/

---


