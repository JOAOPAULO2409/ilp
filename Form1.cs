using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Calculadora
{

    public partial class Form1 : Form
    {
        float valor1 = 0;
        float valor2 = 0;
        string operacao = "";
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void button11_Click(object sender, EventArgs e)
        {
            txtresultado.Text += "1";
        }

        private void button12_Click(object sender, EventArgs e)
        {
            txtresultado.Text += "2";
        }

        private void txtresultado_TextChanged(object sender, EventArgs e)
        {

        }

        private void button16_Click(object sender, EventArgs e)
        {
            txtresultado.Text += "0";
        }

        private void button13_Click(object sender, EventArgs e)
        {
            txtresultado.Text += "3";
        }

        private void button6_Click(object sender, EventArgs e)
        {
            txtresultado.Text += "4";
        }

        private void button7_Click(object sender, EventArgs e)
        {
            txtresultado.Text += "5";
        }

        private void button8_Click(object sender, EventArgs e)
        {
            txtresultado.Text += "6";
        }

        private void button1_Click(object sender, EventArgs e)
        {
            txtresultado.Text += "7";
        }

        private void button2_Click(object sender, EventArgs e)
        {
            txtresultado.Text += "8";
        }

        private void button3_Click(object sender, EventArgs e)
        {
            txtresultado.Text += "9";
        }

        private void button10_Click(object sender, EventArgs e)
        {

        }

        private void button18_Click(object sender, EventArgs e)
        {
            txtresultado.Text += ".";
        }

        private void button4_Click(object sender, EventArgs e)
        {
            valor1 = float.Parse(txtresultado.Text);
            txtresultado.Text = "";
            operacao = "SOMA";
            lbloperacao.Text = "+";

        }

        private void button15_Click(object sender, EventArgs e)
        {
            valor2 = float.Parse(txtresultado.Text);
            if (operacao == "SOMA")
            {
                txtresultado.Text = Convert.ToString(valor1 + valor2);
            }
            else if (operacao == "SUBTRACAO")
            {
                txtresultado.Text = Convert.ToString(valor1 - valor2);
            }
            else if (operacao == "DIVISAO")
            {
                txtresultado.Text = Convert.ToString(valor1 / valor2);
            }
            else if (operacao == "MULTPLICACAO")
            {
                txtresultado.Text = Convert.ToString(valor1 * valor2);
            }
        }

        private void button5_Click(object sender, EventArgs e)
        {

        }

        private void button9_Click(object sender, EventArgs e)
        {
            valor1 = float.Parse(txtresultado.Text);
            txtresultado.Text = "";
            operacao = "SUBTRACAO";
            lbloperacao.Text = "-";
        }

        private void button14_Click(object sender, EventArgs e)
        {
            valor1 = float.Parse(txtresultado.Text);
            txtresultado.Text = "";
            operacao = "MULTPLICACAO";
            lbloperacao.Text = "X";
        }

        private void button19_Click(object sender, EventArgs e)
        {
            valor1 = float.Parse(txtresultado.Text);
            txtresultado.Text = "";
            operacao = "DIVISAO";
            lbloperacao.Text = "/";
        }
    }
}
