#!/usr/bin/env python3
"""
Professional Python script example with error handling
"""

import sys
import time
import json
import logging
from datetime import datetime

# Configure logging
logging.basicConfig(
    level=logging.INFO,
    format='%(asctime)s - %(levelname)s - %(message)s'
)

def calculate():
    """
    Main calculation function
    """
    try:
        # Example calculations
        numbers = [10, 20, 30, 40, 50]
        
        # Perform some operations
        total = sum(numbers)
        average = total / len(numbers)
        maximum = max(numbers)
        minimum = min(numbers)
        
        # Simulate some processing time
        time.sleep(0.5)
        
        # Prepare result
        result = {
            'timestamp': datetime.now().isoformat(),
            'numbers': numbers,
            'total': total,
            'average': round(average, 2),
            'maximum': maximum,
            'minimum': minimum,
            'message': 'Calculation completed successfully'
        }
        
        # Print formatted output
        print("=" * 50)
        print("PYTHON CALCULATION RESULTS")
        print("=" * 50)
        print(f"Numbers analyzed: {numbers}")
        print(f"Total: {total}")
        print(f"Average: {average:.2f}")
        print(f"Maximum: {maximum}")
        print(f"Minimum: {minimum}")
        print("=" * 50)
        
        # Also output JSON for potential parsing
        print("\n--- JSON Output ---")
        print(json.dumps(result, indent=2))
        
        return 0  # Success exit code
        
    except Exception as e:
        logging.error(f"Error in calculation: {str(e)}")
        print(f"ERROR: {str(e)}", file=sys.stderr)
        return 1  # Error exit code

if __name__ == "__main__":
    # Handle command line arguments
    if len(sys.argv) > 1:
        print(f"Received arguments: {sys.argv[1:]}")
    
    # Execute main function
    sys.exit(calculate())