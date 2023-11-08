import argparse
import tabula

# Define the command line arguments
parser = argparse.ArgumentParser()
parser.add_argument("pdf_filepath", help="path to the input PDF file")
parser.add_argument("csv_filepath", help="path to the output CSV file")
args = parser.parse_args()

# Read the PDF file
df = tabula.read_pdf(args.pdf_filepath, pages='all')[0]

# Convert the PDF to CSV
tabula.convert_into(args.pdf_filepath, args.csv_filepath, output_format="csv", pages='all')

# Print the DataFrame
print(df)

