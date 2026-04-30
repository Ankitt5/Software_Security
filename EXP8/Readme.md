# Browser Artifacts Analysis

## Aim
To analyze browser-stored data such as cookies, browsing history, and local storage in order to understand how user activity is recorded and what privacy risks are associated with it.

---

## Theory
Modern web browsers store different types of data to improve user experience. This includes cookies, cache, browsing history, and local storage. 

Cookies are small pieces of data stored by websites to maintain sessions and track users. Local storage is used to store larger amounts of data on the client side. Browsing history records all visited websites along with timestamps.

Although this data is useful, it can become a privacy risk if accessed by unauthorized users. Attackers can use this information for tracking, session hijacking, or understanding user behavior.

---

## Methodology
1. Open a web browser such as Chrome or Firefox  
2. Press **F12** to open Developer Tools  
3. Navigate to the **Application (Chrome)** or **Storage (Firefox)** tab  
4. Inspect the following:
   - Cookies (check name, value, expiry, flags)
   - Local Storage (stored key-value data)
   - Session Storage  
5. Identify any sensitive or tracking-related data  
6. Download and run **Browser History View (Nirsoft)**  
7. Extract browsing history including visited URLs and timestamps  
8. Analyze the collected data for privacy risks  

---

## Results
- Multiple cookies were found, including tracking cookies used by websites  
- Some cookies did not have secure flags like HttpOnly or Secure  
- Local storage contained session-related data  
- Browsing history showed visited websites along with date and time  

---

## Discussion
The experiment shows that browsers store a significant amount of user data. While this improves usability, it also introduces security and privacy concerns. 

If an attacker gains access to this data, they can track user activity or potentially hijack sessions. Proper browser security settings and safe browsing practices are important to reduce these risks.

---

## Future Scope
- Develop tools to automatically detect tracking cookies  
- Implement browser extensions for privacy monitoring  
- Extend analysis to mobile browsers  
- Study browser forensics in detail  

---

## Tools Used
- Browser Developer Tools (Chrome/Firefox)  
- Browser History View (Nirsoft) – https://www.nirsoft.net/utils/browsing_history_view.html  
