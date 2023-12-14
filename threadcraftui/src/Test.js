import React, { useEffect } from 'react';

function Test() {
    useEffect(() => {
        const fetchData = async() => {
            try {
                let response = await fetch('http://tc.com/index.php', {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                });

                if (response.ok) {
                    const responseData = response.json();
                    console.log("Success!");
                    console.log(responseData);
                } else {
                    console.log("Failed...");
                }
            } catch (error) {
                console.log("Errored out:", error);
            }
        };
        
        fetchData();
    }, []);

    return (
        <div>Test</div>
    );
}

export {Test}