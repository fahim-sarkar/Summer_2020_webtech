using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Miniproject
{
    #region Mp
    public class Mp
    {
        #region Member Variables
        protected int _id;
        protected string _pass;
        protected string _conP;
        protected string _name;
        protected string _email;
        protected string _uType;
        #endregion
        #region Constructors
        public Mp() { }
        public Mp(string uType)
        {
            this._uType=uType;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Pass
        {
            get {return _pass;}
            set {_pass=value;}
        }
        public virtual string ConP
        {
            get {return _conP;}
            set {_conP=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string UType
        {
            get {return _uType;}
            set {_uType=value;}
        }
        #endregion
    }
    #endregion
}