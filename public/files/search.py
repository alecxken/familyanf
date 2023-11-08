import argparse
from rapidfuzz import process, fuzz
import json
import os

def search_name(benname, country):
    # Get all the JSON files in the '/data' directory
    data_dir = os.path.join(os.getcwd(), 'data')
    files = [os.path.join(data_dir, f) for f in os.listdir(data_dir) if os.path.isfile(os.path.join(data_dir, f))]

    # Initialize an empty array to store all the names from the JSON files
    choices = []

    # Loop through each file, extract the names, and add them to the $choices array
    for file in files:
        with open(file) as f:
            data = json.load(f)

        # Extract just the Full_name values from the array
        ar = [item['Full_name'] for item in data]

        # Add the Full_name values to the $choices array
        choices.extend(ar)

    # Find the closest match for the $benname in the $choices array
    result = process.extractOne(benname, choices, scorer=fuzz.token_sort_ratio, score_cutoff=90)

    return result[0] if result is not None else None

if __name__ == '__main__':
    # Define the command line arguments
    parser = argparse.ArgumentParser()
    parser.add_argument("benname", help="name to search for")
    parser.add_argument("country", help="country to search in")
    args = parser.parse_args()

    # Call the search_name function with the provided arguments
    result = search_name(args.benname, args.country)

    # Print the result
    if result is not None:
        print(f"Closest match: {result}")
    else:
        print("No matches found.")
