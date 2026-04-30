# Vulnerability Scanning (Passive Mode)

## Aim
To scan a web application and find basic security issues using a safe method.

## Theory
Vulnerability scanning is used to find security problems in websites like missing headers, weak cookies, or misconfigurations. Passive scanning checks these issues without attacking the site.

Tool used: OWASP ZAP

## Methodology
1. Open OWASP ZAP
2. Keep it in passive scan mode
3. Enter the target website URL
4. Let it analyze the traffic
5. Check the alerts section

## Results
- Some security headers were missing  
- Cookies were not properly secured  
- Some information about the server was visible  

## Discussion
Even simple websites can have security issues. Passive scanning is useful because it is safe and does not harm the system.

## Future Scope
- Try active scanning in lab environment  
- Automate scanning  
- Learn more tools  

## Tools Used
- OWASP ZAP – https://www.zaproxy.org/

